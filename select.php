
<?php 
include("connection_db.php"); 
error_reporting(2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
    .wrapper{
        width: 650px;
        margin: 0 auto;
    }
    .page-header h2{
        margin-top: 0;
    }
    table tr td:last-child a{
        margin-right: 15px;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
               

                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Thông tin chi tiết sản phẩm </h2>
                        <a href="giaodien.php" class="btn btn-success pull-right">Nhập sản phẩm mới</a>
                    </div>
                    <?php
                    // Include config file
                    // require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM Products";
                    $foder=  "./uploads/";
                    if($result = mysqli_query($mysqli, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>id</th>";
                            echo "<th>name</th>";
                            echo "<th>img</th>";
                            echo "<th>category</th>";
                            echo "<th>quantity</th>";
                            echo "<th>price</th>";
                            echo "<th>description </th>";
                            echo "<th>Status </th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                // $a = 'SELECT name FROM categories WHERE id = ' . $row[' id'];
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                //echo "<td>" . $row['img'] . "</td>";
                                // echo "<td><img src =" ."./uploads/" . $row['img'] . "></td>"?>
                                 

                                <td><img src="<?php echo $foder.$row['img'] ?>" heigh=100px width=100px></td>
                                <?php 
                                echo "<td>" . $row['category'] . "</td>";
                                echo "<td>" . $row['quantity'] . "</td>";
                                echo "<td>" . $row['price'] . "</td>";
                                echo "<td>" . $row['description'] . "</td>";
                                echo "<td>";
                                echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'> No records were found. </p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
                    }

                    // Close connection
                    mysqli_close($mysqli);
                    ?>

                </div>
            </div> 
            <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  </div>    
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="gioithieu.php" class="btn btn-success pull-right">Quay lại trang chủ</a>
                  </div> <br><br>
            </div>       
        </div>
    </div>
</body>
</html>