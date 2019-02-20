
<?php
error_reporting(1);
include("connection_db.php");
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file


    // Prepare a select statement
    $sql = "SELECT * FROM products WHERE id = ?";
    
    if($stmt = mysqli_prepare($mysqli, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $id = $row["id"];
                $name = $row["prod_name"];
                $code = $row["code"];
                $img = $row["img"];
                $category = $row["category_id"];
                $quantity = $row["quantity"];
                $price = $row["new_price"];
                $status = $row["status_id"];
                $imported_date = $row["imported_date"];
                $description = $row["description"];
                
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                echo "rong";
                exit();
            } 
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($mysqli);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    echo "rong";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    .wrapper{
        width: 500px;
        margin: 0 auto;
    }
</style>
</head>
<body  style="background: #ecfbf8" >
    <div class="wrapper">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Xem chi tiết sản phẩm </h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>ID</label>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <p class="form-control-static"><?php echo $row["id"]; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>Name</label>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <p class="form-control-static"><?php echo $row["prod_name"]; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>Code</label>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <p class="form-control-static"><?php echo $row["code"]; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>img</label>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <td><img src="<?php echo "./uploads/".$row['img'] ?>" heigh=100px width=100px></td>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>Category</label>
                        </div>
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <p class="form-control-static"><?php 
                            require('connection_db.php');
                            $res_cate_id = mysqli_query($mysqli,"SELECT * FROM categories WHERE id = ". $row['category_id']);
                            while($rowCa = mysqli_fetch_assoc($res_cate_id))
                            {
                             ?>
                             <option value="<?php echo $rowCa['id']; ?>"><?php echo $rowCa['cat_name']; ?></option>   

                             <?php
                         }
                         mysqli_close($mysqli);  ?></p>
                         <!-- echo $row["category"]; -->
                     </div>
                 </div>
                 <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <label>Quantity</label>
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <p class="form-control-static"><?php echo $row["quantity"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <label>Price</label>
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <p class="form-control-static"><?php echo $row["new_price"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <label>Status</label>
                    </div>
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <p class="form-control-static"><?php 
                        require('connection_db.php');
                        $res_cate_id = mysqli_query($mysqli,"SELECT * FROM status_product WHERE id = ". $row['status_id']);
                        while($rowCa = mysqli_fetch_assoc($res_cate_id))
                        {
                           ?>
                           <option value="<?php echo $rowCa['id']; ?>"><?php echo $rowCa['status_name']; ?></option>   

                           <?php
                       }
                       mysqli_close($mysqli);  ?></p>

                   </div>
               </div>
               <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label>Imported Date</label>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <p class="form-control-static"><?php echo $row["imported_date"]; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label>Description</label>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                   <p class="form-control-static"><?php echo $row["description"]; ?></p>
               </div>
           </div>

           <p><a href="select.php" class="btn btn-primary">Back</a></p>
       </div>
   </div>        
</div>
</div>
</body>
</html> 
