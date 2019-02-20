
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body style="background: #ecfbf8;"q>
  <section id="container" class="">
    <?php
    require_once "admin.php";
    ?>
    <section id="main-content">
      <section class="wrapper">
        <div class="container" >
          <div class="row">
            <div class="col-md-12">
              <div class="page-header clearfix">
                <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <h2 style="font-family: time new roman" >Thông tin chi tiết sản phẩm </h2>
                  </div>
                  
                </div>
              </div>
              <?php 
              $sql = "SELECT * FROM Products";
              $foder=  "./uploads/";
              if($result = mysqli_query($mysqli, $sql)){
                if(mysqli_num_rows($result) > 0){
                  echo "<table class='table table-bordered table-striped'>";
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th>Id</th>";
                  echo "<th>Name</th>";
                  echo "<th>Code</th>";
                  echo "<th>Img</th>";
                  echo "<th>Category</th>";
                  echo "<th>Quantity</th>";
                  echo "<th>Price</th>";
                  echo "<th>Status</th>";
                  echo "<th>Imported_date</th>";
                  echo "<th>Description </th>";
                  echo "<th>Action </th>";
                  echo "</tr>";
                  echo "</thead>";
                  echo "<tbody>";
                  while($row = mysqli_fetch_array($result)){
                                // $a = 'SELECT name FROM categories WHERE id = ' . $row[' id'];
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['prod_name'] . "</td>";
                    echo "<td>" . $row['code'] . "</td>";
                                //echo "<td>" . $row['img'] . "</td>";
                                // echo "<td><img src =" ."./uploads/" . $row['img'] . "></td>"?>



                                <td><img src="<?php echo $foder.$row['img'] ?>" heigh=100px width=100px></td>
                                <?php 
                                echo "<td>" . $row['category_id'] . "</td>";
                                echo "<td>" . $row['quantity'] . "</td>";
                                echo "<td>" . $row['new_price'] . "</td>";
                                echo "<td>" . $row['status_id'] . "</td>";
                                echo "<td>" . $row['imported_date'] . "</td>";
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

                      </div>       
                    </div>
                  </section>
                  <div class="text-right">
                    <div class="credits">

                      <a href="https://bootstrapmade.com/">Create </a> by <a href="https://www.linkedin.com/in/nguyen-huu-tuan-42b67b179/">Nguyễn Hữu Tuấn </a> and <a href="https://www.linkedin.com/in/tao-ho/">Hồ Văn Tảo </a>
                    </div>
                  </div>
                </section>
              </section>
            </body>

            </html>
