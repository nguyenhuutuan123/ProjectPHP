<?php
error_reporting(1);

require_once "connection_db.php";

move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "uploads/" . $_FILES["fileUpload"]["name"]);

if (isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "uploads/" . $_FILES["fileUpload"]["name"]);
    }
}

// Define variables and initialize with empty values
$name = $category = $quantity = $price = $description= "";
$name_err   = $category_err = $quantity_err = $price_err = $description_err= "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    


    // Validate name
    $input_name = trim($_POST["txtName"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
    

   // $fileUpload = $_FILES['fileUpload']['name'];
    
    // Validate category
    $input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please enter the category amount.";     
    }   else{
        $category = $input_category;
    }

    
    // Validate quantity
    $input_quantity = trim($_POST["txtNumber"]);
    if(empty($input_quantity)){
        $quantity_err = "Please enter the quantity amount.";     
    }else{
        $quantity = $input_quantity;
    }

    // Validate price
    $input_price = trim($_POST["txtPrice"]);
    if(empty($input_price)){
        $price_err = "Please enter the price amount.";     
    } else{
        $price = $input_price;
    }


    // Validate description description
    $input_description = trim($_POST["txtDescript"]);
    if(empty($input_description)){
        $description_err = "Please enter an description.";     
    } else{
        $description = $input_description;
    }

    // Check input errors before inserting in database
    if(empty($name_err)  && empty($quantity_err) && empty($price_err)  && empty($description_err)){
        // Prepare an update statement
        $sql = "UPDATE products SET name=?, img=?, category=?, quantity=?, price=?, description=? WHERE id=?";

        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssiiisi", $param_name, $fileUpload, $param_category, $param_quantity, $param_price, $param_description, $param_id);
            
            // Set parameters
            $param_name = $name;
            $fileUpload = $_FILES['fileUpload']['name'];
            $param_category = $category;
            $param_quantity = $quantity;
            $param_price = $price;
            $param_description = $description;
            $param_id = $id;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: select.php");
                exit();
            } else{
                echo $sql.$mysqli->errors;
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM products WHERE id = ?";
        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value

                    $name = $row["name"];
                    $img = $row["img"];
                    $category = $row["category"];
                    $quantity = $row["quantity"];
                    $price = $row["price"];
                    $description = $row["description"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    .wrapper{
        width: 500px;
        margin: 0 auto;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <?php error_reporting(1) ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Cập nhật sản phẩm</h2>
                    </div>
                    <p>Vui lòng chỉnh sửa các giá trị đầu vào và gửi để cập nhật hồ sơ..</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="txtName" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Hình ảnh</label>
                            <input type="file" name="fileUpload" id="input" class="form-control" value=" <?php echo "<td>" . $row['img'] . "</td>" ?>"  >
                            <img src="<?php echo "./uploads/" .$row['img'] ?>" heigh=100px width=100px> 

                            <span class="help-block"><?php echo $image_err;?></span>
                        </div> 
                        <div class="form-group ">
                            <label>Danh muc </label>

                            <select class="form-control" name="category">

                             <?php
                             require('connection_db.php');
                             $res_cate_id = mysqli_query($mysqli,"SELECT * FROM categories WHERE id = ". $row['category']);
                             while($rowCa = mysqli_fetch_assoc($res_cate_id))
                             {
                               ?>
                               <option value="<?php echo $rowCa['id']; ?>"><?php echo $rowCa['name']; ?></option>   

                               <?php
                           }

                           $sql3 = "SELECT * FROM categories";
                                        $result = mysqli_query($mysqli,$sql3);
                                        if($result)
                                        {    
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <?php echo $row['name']; ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>   
                                                <?php
                                            }
                                        }
                         mysqli_close($mysqli);
                         ?>

                     </select>

                 </div>

                 <div class="form-group <?php echo (!empty($quantity_err)) ? 'has-error' : ''; ?>">
                    <label>Quantity</label>
                    <input type="number" name="txtNumber" class="form-control" value="<?php echo $quantity; ?>">
                    <span class="help-block"><?php echo $quantity_err;?></span>
                </div>

                <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                    <label>Price</label>
                    <input type="number" name="txtPrice" class="form-control" value="<?php echo $price; ?>"  min="20000" required/>
                    <span class="help-block"><?php echo $price_err;?></span>
                </div>
                <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                    <label>Description</label>
                    <textarea name="txtDescript" class="form-control"><?php echo $description; ?></textarea>
                    <span class="help-block"><?php echo $description_err;?></span>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <button type="submit" name="update" class="btn btn-warning "   style="margin-left: 227px;">Update</button>
                <a href="select.php" class="btn btn-default">Cancel</a>

            </form>
        </div>
    </div>        
</div>
</div>
</body>
</html>
