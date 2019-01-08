<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $image = $category = $quantity = $price = $description = "";
$name_err= $image_err = $category_err = $quantity_err = $price_err = $description_err = "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["food_name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
    
    // Validate description description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter an description.";     
    } else{
        $description = $input_description;
    }

    $input_category_name = trim($_POST["category_id"]);
    if(empty($input_category_name)){
        $description_err = "Please enter an description.";     
    } else{
        $category_id = $input_category_name;
    }

    $input_comment = trim($_POST["comment"]);
    if(empty($input_comment)){
        $comment_err = "Please enter an description.";     
    } else{
        $comment = $input_comment;
    }
    
    // Validate price
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price amount.";     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($description_err) && empty($price_err)){
        // Prepare an update statement
        $sql = "UPDATE foods SET food_name=?, price=?, description=?, category_id=?, comments = ? WHERE id=?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sisssi", $param_name, $param_price, $param_description, $param_category, $param_comment, $param_id);
            
            // Set parameters
            $param_name = $food_name;
            $param_description = $description;
            $param_price = $price;
            $param_category = $category_id;
            $param_comment = $comment;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
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
        $sql = "SELECT * FROM foods WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $food_name = $row["food_name"];
                    $description = $row["description"];
                    $price = $row["price"];
                    $category_id = $row["category_id"];
                    $comment = $row["comments"];
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
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>name</label>
                            <input type="text" name="food_name" class="form-control" value="<?php echo $food_name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Image</label>
                            <input type="file" name="fileUpload" class="form-control" value="<?php echo $fileUpload; ?>">
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>

                        <div class="form-group">
                           <label> Category id </label>
                           <select class="form-control" name="category_id">
                               <?php
                               require('connection_db.php');
                               $res_cate_id = mysqli_query($mysql,"SELECT * FROM categories WHERE id = ". $row['category_id']);
                               while($rowCa = mysqli_fetch_assoc($res_cate_id))
                               {
                                   ?>
                                   <option value="<?php echo $rowCa['id']; ?>"><?php echo $rowCa['cate_name']; ?></option>   

                                   <?php
                               }

                               $sqlCate = "SELECT * FROM categories";
                               $resCate = mysqli_query($mysql,$sqlCate);

                               while($rowCate = mysqli_fetch_assoc($resCate))
                               {
                                   if ($rowCate['id'] != $row['category_id']) {
                                       # code...

                                       ?>
                                       <option value="<?php echo $rowCate['id']; ?>"><?php echo $rowCate['cate_name']; ?></option>   

                                       <?php
                                   }   
                               }
                               mysqli_close($mysql);
                               ?>

                           </select>
                           <span class="help-block"><?php echo $status_err;?></span>

                       </div>

                        <div class="form-group <?php echo (!empty($quantity_err)) ? 'has-error' : ''; ?>">
                            <label>Quantity</label>
                            <input type="number" name="txtquantity" class="form-control" value="<?php echo $txtquantity; ?>">
                            <span class="help-block"><?php echo $quantity_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="number" name="txtprice" class="form-control" value="<?php echo $txtprice; ?>">
                            <span class="help-block"><?php echo $price_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="txtdescript" class="form-control"><?php echo $txtdescript; ?></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="select.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>