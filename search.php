
<?php 

include("addcard.php"); 

include("connection_db.php");
session_start(); 
if (isset($_REQUEST['ok'])) 
{

  $search = addslashes($_GET['search']);
  if (empty($search)) {
    echo "Yeu cau nhap du lieu vao o trong";
  }
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
                    <h4 class="modal-title" style="color: #f809db;font-weight: bold;font-size: 30px;">Dịch vụ Spa Tảo Tuấn</h4>
                  </center>
                </div>
              </div>




              <div class="col-xs-12 col-sm-12    col-md-12   col-lg-12  ttin">
                <div class="row">
                  <h2 style="color: #f809db;font-weight: bold;">Kết quả tìm kiếm</h2>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1" style="background-color: #e3ecec">
               <h2>Tin liên quan :</h2>
               <?php 
    require('connection_db.php');
    $sql1 = "SELECT * FROM Products where prod_name like '%$search%'";
    if($result1 = mysqli_query($mysqli, $sql1)){
        if(mysqli_num_rows($result1) > 0){
            while($row = mysqli_fetch_array($result1)){
                ?>
                <div class="col-sm-4">
                    <form method="post" action="home.php?id=<?php echo $row["id"]; ?>">
                        <div class=" thumbnail hovereffect  "  >
                            <a href="chitiet.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " ></a>
                            <div class="overlay">
                                <h2>Spa Tảo Tuấn</h2>

                                <a class="info" href="chitiet.php?id=<?php echo $row['id'] ?>" style="background: white;">Xem thêm</a>

                                <a class="info" href="#" style="background: white;"><input  class="info" type="submit" name="add_to_cart" style="background: white;"   value="Add to Cart" /></a>



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
                  $sql1 = "SELECT * FROM Products where status_id =6   limit 1, 10   ;";
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
    </div><!-- container-fluid -->
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