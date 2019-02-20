<?php 
include("addcard.php"); 
include("connection_db.php");
session_start(); 
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
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
        $old_price = $row["old_price"];
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
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>


  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="swiper-master/dist/css/swiper.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript"></script>
  <script type="text/javascript" src="JS/script.js"></script>
  <meta name="Viewport" content="width=device-width.initial-scale=1">
  <meta http-equiv="X-UA-compatible" content="IE=edge"> 
  <link rel="stylesheet" type="text/css" href="animate/animate.css">
  <script type="text/javascript" src="animate/wow.min.js"></script>

  <script type="text/javascript">
    new WOW().init();
  </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <meta charset="utf-8">
</head>

<body  style="background: #effcfa;">
  <?php
  require_once "top.php";
  ?>
  <div id="wapper">

    <form method="post" action="chitiet.php?id=<?php echo $row["id"]; ?>">
      <div class="container ">
        <div style="  margin-left: 2%; margin-right: 2%" class="row chitiet">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="page-header">
                <center>
                  <h4 class="modal-title" style="color: #f809db;font-weight: bold;font-size: 30px;">Thông Tin Chi Tiết Dịch Vụ </h4>
                </center>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="progress  wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width:100%">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
               <img style="margin-left: 50px;
               margin-top: 50px;width: 300px;height: 300px;" class="beautypress-feature-image" src="<?php echo "./uploads/".$row['img'] ?>"" alt="CHĂM SÓC DA + THẢI ĐỘC CHÌ + ĐIỆN DI C.">
               <center><h3 style="font-size: 20px;"><?php echo $row["prod_name"]; ?></h3></center>
             </div>


             <div class="col-xs-12 col-sm-7    col-md-7   col-lg-7  ttin">
              <div class="row">
                <h2 style="color: #f809db;font-weight: bold;">Dịch vụ Spa Tảo Tuấn</h2>
              </div>
              <h3 style="color: black;font-weight: bold;">Thuần thiên nhiên</h3>
              <p>Hãy lựa chọn ngay những sản phẩm Spa cao cấp sau đây để chăm sóc sức khỏe và sắc đẹp toàn diện nhất .</p>
              <p></p></br>
              <div class="row">

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  Chất Lượng  <p class="glyphicon glyphicon-ok"></p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  Phù Hợp <p class="glyphicon glyphicon-ok"></p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  Trách Nhiệm  <p class="glyphicon glyphicon-ok"> </p>
                </div>
              </div>
              <div class="row">
                <h3 style="font-size: 18px;">Mã dịch vụ: <?php echo $row["code"]; ?>


                <p class="form-control-static"><?php 
                require('connection_db.php');
                $res_cate_id = mysqli_query($mysqli,"SELECT * FROM categories WHERE id = ". $row['category_id']);
                while($rowCa = mysqli_fetch_assoc($res_cate_id))
                {
                 ?>
                 <option value="<?php echo $rowCa['id']; ?>"><?php echo $rowCa['cat_name']; ?></option>   

                 <?php
               }
               mysqli_close($mysqli);  ?></p></h3>
             </div>
             <div class="row">
              <p><strong>Giá : <?php echo $row["old_price"]; ?>  đ   giảm còn  <?php echo $row["new_price"]; ?>  đ</p>  </strong> 
            </div>
            <div class="row">
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
           <div class="row">
            <p class="form-control-static"><?php echo $row["description"]; ?></p>
          </div>
          <div class="row">
            <p>Môi trường ô nhiễm, trang điểm thường xuyên, thói quen sinh hoạt không tốt… khiến da bạn thâm sạm, xỉn màu, dễ sinh mụn do tích tụ một lượng chì đáng kể. Việc rửa mặt hàng ngày hay tẩy trang chỉ làm sạch được lớp biểu bì bên ngoài chứ không lấy được hết chất bẩn cặn bã từ bên trong.</p>
          </div>
          <div class="row">
            <p><?php echo $note1; ?> </p>
          </div>
          <div class="row">


            <button type="submit" name = "add_to_cart" class="btn btn-lg btn-success" style="width: 40%">Book now</button>




            <!-- <input  class="info" type="submit" name="add_to_cart" style="background: white;"   value="Add to Cart" /> -->

            <!-- <a class="info" href="#" style="background: white;"><input class="info" type="submit" name="add_to_cart" style="background: white;"   value="Add to Cart" /></a> -->


          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <br><br><div class="progress  wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
            <div class="progress-bar progress-bar-success" role="progressbar" style="width:100%">
            </div>
          </div>
        </div>

        <div class="col-sm-12 ">
          <div class="  col-sm-12">
            <center><h2 style="color: #f809db;font-weight: bold;">Bài Viết Liên Quan</h2><br></center>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">

          </div>
          <div class="  col-sm-8">
            <img class="wp-image-739 size-full aligncenter" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CHĂM-SÓC-DA-THẢI-ĐỘC-CHÌ-06.jpg" alt="" width="650" height="207" srcset="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CHĂM-SÓC-DA-THẢI-ĐỘC-CHÌ-06.jpg 650w, http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CHĂM-SÓC-DA-THẢI-ĐỘC-CHÌ-06-300x96.jpg 300w, http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CHĂM-SÓC-DA-THẢI-ĐỘC-CHÌ-06-600x191.jpg 600w" sizes="(max-width: 650px) 100vw, 650px" style="width: 700px;">
          </div>
          <div class="  col-sm-4">

          </div>
        </div>
        <div class=" col-sm-12 ">
          <br></br><p>Chì là một chất rất độc hại, qua thời gian, chì bị tích tụ trong cơ thể và gây ảnh hưởng nghiêm trọng đến sức khỏe và sắc đẹp của bạn. Chì có thể đi vào cơ thể qua đường ăn uống và thẩm thấu qua da khi bạn sử dụng nhiều sản phẩm trang điểm chứa chì hoặc da mặt hay tiếp xúc nhiều với khói, bụi ô nhiễm ở trên đường. Chì tích tụ trong cơ thể sẽ gây ra rất nhiều bệnh lý nghiêm trọng như ung thư, rối loạn tiêu hóa, da sạm đen, thô ráp.Do đó, việc hút chì thải độc tố, làm sạch sâu cho da là vô cùng cần thiết.</p>
        </div>
      </div>
      <div class="row">
        <div class="row  wow bounceInUp"  data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
          <div class="  col-sm-12  ">
            <h2 id="cauhoi">Tại sao nên chọn Tảo Tuấn Spa ?</h2></br>
            <div class="row">
              <?php 
              require('connection_db.php');
              $sql1 = "SELECT * FROM Products where status_id =6   limit 3, 10   ;";
              if($result1 = mysqli_query($mysqli, $sql1)){
                if(mysqli_num_rows($result1) > 0){
                  while($row = mysqli_fetch_array($result1)){
                    ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                      <form method="post" action="gioithieu.php?id=<?php echo $row["id"]; ?>">
                        <div class=" thumbnail hovereffect  "  >
                          <a href="products/DetailProduct.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " ></a>
                          <div class="overlay">
                            <h2>Spa Tảo Tuấn</h2>

                            <a class="info" href="chitiet.php?id=<?php echo $row['id'] ?>" style="background: white;">Xem thêm</a>
                            <a class="info" href="#" style="background: white;"><input class="info" type="submit" name="add_to_cart" style="background: white;"   value="Add to Cart" /></a>
                          </div>  
                          <div class="caption">
                           <h4 style="color: red;"><center> <?php echo $row['prod_name']; ?></center></h4>
                           <p>
                            <center><h4 style="color: black"> <?php echo $row['new_price']; ?> đ
                              <strike> <?php echo $row['old_price']; ?> đ </strike> </h4></center>
                            </p>
                            <p>
                             <input type="hidden" name="prod_name" value="<?php echo $row["prod_name"]; ?>" />  
                             <input type="hidden" name="new_price" value="<?php echo $row["new_price"]; ?>" />  
                           </p>
                         </div>
                       </div>
                     </form>
                   </div>
                   <?php
                 }
                 mysqli_free_result($result1);
               }else{
                echo "<p class='lead'> No records were found. </p>";
              }
            } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
            }

            mysqli_close($mysqli);

            ?>    

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php include('bottom.php'); ?>
    </div>
  </div>
 
</form>


</div>

</body>
<script>
 function addCart(id)  
 {  
  $.ajax({  
    url:"add_cart.php",  
    method:"POST",  
    data:{id:id, quantity:quantity}, 
    dataType:"text",  
    success:function(data){  
      alert(data);
    }  
  });  
}

$(document).on('click','a[data-role=delete]',function(){
  var id  = $(this).data('id');

  addCart(id);  


});

</script>

</html>