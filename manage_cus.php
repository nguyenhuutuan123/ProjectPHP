<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body style="background: #ecfbf8" >

  <section id="container" class="">
    <?php
    require_once "admin.php";
    ?>
    <section id="main-content">
      <section class="wrapper">
        <div class="container ">
          <div class="row">
            <div class="col-md-12">
              <div class="page-header clearfix">
                <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <h2 style="font-family: time new roman">Lịch Hẹn khách hàng</h2>
                  </div>
                </div>
              </div>
              <?php

              $sql = "SELECT * FROM customer_order";
              $foder=  "./uploads/";
              if($result = mysqli_query($mysqli, $sql)){
                if(mysqli_num_rows($result) > 0){
                  echo "<table class='table table-bordered table-striped'>";
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th>Id</th>";
                  echo "<th>Id_Product</th>";
                  echo "<th>Name Customer</th>";
                  echo "<th>Gender</th>";
                  echo "<th>Phone Number</th>";
                  echo "<th>Email</th>";
                  echo "<th>Address</th>";
                  echo "<th>Date Order </th>";
                  echo "<th>Date Excute</th>";
                  echo "<th>Time Excute</th>";
                  echo "<th>Money</th>";
                  echo "</tr>";
                  echo "</thead>";
                  echo "<tbody>";
                  while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['id_product'] . "</td>";
                    echo "<td>" . $row['cus_name'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['date_order'] . "</td>";
                    echo "<td>" . $row['date_excute'] . "</td>";
                    echo "<td>" . $row['time_excute'] . "</td>";         
                    echo "<td>" . $row['money'] . "</td>";         

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
