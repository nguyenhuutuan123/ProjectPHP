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
                    <h2 >Feedback khách hàng </h2>
                  </div>
                  </div>
               </div>
             </div>
             <?php
                     
             $sql = "SELECT * FROM feedback";
             $foder=  "./uploads/";
             if($result = mysqli_query($mysqli, $sql)){
              if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-striped'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Stt</th>";
                echo "<th>Name</th>";
                echo "<th>Phone Number</th>";
                echo "<th>Email</th>";
                echo "<th>Comments</th>";
                echo "<th>Action </th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['phone_number'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['feedback'] . "</td>";
                  echo "<td>";

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
