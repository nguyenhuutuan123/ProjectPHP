<?php 
include("addcard.php"); 
include("connection_db.php");
session_start();  

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

    <form method="post" action="gioithieu.php?id=<?php echo $row["id"]; ?>">
      <div class="container ">
        <div style="  margin-left: 2%; margin-right: 2%" class="row chitiet">

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <section class="background-container background-form" style="background-image: url('Images/anhgioithieu.jpg')">
           <div class="background-overlay"></div>
           <div class="container">
            <div class="text-inner-background">
             <h1 class="color-white">Tảo Tuấn Spa </h1>
             <h3 class="color-white" style="font-size: 19px;">Tọa lạc tại địa chỉ 101B Lê Hữu Trác, Phường Phước Mỹ, Quận Sơn Trà, TP Đà Nẵng, Thương Tuấn Hair &amp; Spa là địa chỉ làm đẹp đáng tin cậy với công nghệ và các chuyên gia hàng đầu về thẩm mĩ, thuận tiện cho khách hàng lui tới thăm khám và trải nghiệm dịch vụ.</h3>
           </div>
         </div>
       </section>
     </div>

     <div class=" col-xs-5 col-sm-5 col-md-5 col-lg-7" >
       <h2>Địa Chỉ :</h2>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1123674739974!2d108.23931351433654!3d16.059657743961317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f0872a317%3A0x97b5dc012c8a8f3e!2zVHLGsOG7nW5nIGNhbyDEkeG6s25nIEzGsMahbmcgVGjhu7FjIFRo4buxYyBQaOG6qW0!5e0!3m2!1sen!2s!4v1542011347252" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>

     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1" style="background-color: #e3ecec">
       <h2>Tin liên quan :</h2>
       <?php 
       require('connection_db.php');
       $sql1 = "SELECT * FROM Products where status_id = 6 limit 3     ;";
       if($result1 = mysqli_query($mysqli, $sql1)){
        if(mysqli_num_rows($result1) > 0){
          while($row = mysqli_fetch_array($result1)){
            ?>
            <div class="media">
              <form method="post" action="gioithieu.php?id=<?php echo $row["id"]; ?>">
                <div class="media-left">
                  <a href="chitiet.php?id=<?php echo $row['id'] ?>"><img  style="    width: 186px;" src="<?php echo  "./uploads/".$row['img'] ?> " ></a>

                </div>
                <div class="media-body">
                  <h4 class="media-heading"><?php echo $row['prod_name']; ?></h4>
                  <p><?php echo $row["description"]; ?></p>
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

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
       <a href="#">Tảo Tuấn Spa</a>
     </div>
     <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
       <a href="#">Chất lượng</a>
     </div>
     <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
       <a href="#">Nhiệt tình</a>
     </div>
     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
     aria-valuemin="0" aria-valuemax="100" style="width:20%">
     <a href="#">Nhiều ưu đãi</a>
   </div>
 </div>
</div>

<div class="row  wow bounceInUp"  data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
  <div class="  col-sm-12  ">
    <h2 id="cauhoi">Tại sao nên chọn Tảo Tuấn Spa ?</h2></br>
    <div class="row">
      <?php 
      require('connection_db.php');
      $sql1 = "SELECT * FROM Products where status_id = 6   limit 3, 4 ;";
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



<div class="row wow bounceInUp"data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">
  <div class="  col-sm-12  ">
    <div class="  col-sm-4   ">
      <img src="Images/cauchuyen.jpg" class="img-circle" alt="" style="border: 5px solid #df2a0d;border-top: 1px solid #df2a0d;border-bottom: 13px solid #df2a0d;width: auto; margin-top: 30px;"> <br></br>
    </div>
    <div class="  col-sm-7 ">
      <br> </br>  
      <p style="font-size: 15px;color: #3d3838;"  width="text-responsive">Câu chuyện bắt nguồn từ một người từng bị mụn tấn công khá nặng, mọi người cũng vì thế mà dần xa lánh. Mặc dù đã điều trị ở nhiều nơi nhưng kết quả vẫn bằng không. Sau khi có thời gian sinh sống tại Hàn Quốc, tôi quyết đinh mang bí quyết trị mụn, cách chăm sóc và dưỡng da về Việt Nam, như một phép màu giúp hàng triệu người dân Việt dễ dàng sở hữu được một làn da đẹp hoàn hảo như người dân xứ Hàn.</p>
      <p style="font-size: 15px;color: #3d3838;">Mạnh dạn đem công nghệ tiên tiến, trang thiết bị hiện đại, cùng với sản phẩm chuyên điều trị mụn và chăm sóc da cao cấp. SEOUL SPA tự tin đem đến bạn làn da CĂNG BÓNG, SÁNG MỊN và SẠCH MỤN hoàn toàn, cam kết đem đến sự hài lòng tuyệt đối đến khách hàng. SEOUL SPA lấy tâm làm quy chuẩn đảm bảo mọi khách hàng luôn an tâm về chất lượng dịch vụ, từ nhân viên, máy móc đến sản phẩm điều trị. Mong muốn mọi người dân Việt Nam có thể tự tin mọi góc nhìn, mọi hoàn cảnh với một làn da sáng - sạch - đẹp.</p></br>
    </div>
  </div>
</div>

<div class="row wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1" style="background: #e3ecec ">
  <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
    <h2 class="" style="color: #e616f4;font-style: italic;">Secret of BeautyPress</h2>
    <p style="font-size: 15px;color: #3d3838;" width="text-responsive" >Tọa lạc tại địa chỉ 101B Lê Hữu Trác, Phường Phước Mỹ, Quận Sơn Trà, TP Đà Nẵng, Thương Tuấn Spa là địa chỉ làm đẹp đáng tin cậy với công nghệ và các chuyên gia hàng đầu về thẩm mĩ, thuận tiện cho khách hàng lui tới thăm khám và trải nghiệm dịch vụ. Thương Tuấn Spa đi vào hoạt động như hiện thân của sự đẳng cấp và hiện đại từ những chi tiết nhỏ nhặt nhất. Đạt điểm tối đa khi sở hữu một không gian sang trọng và hoàn toàn riêng tư, Thương Tuấn Spa chiếm trọn cảm tình của khách hàng khi đi cùng với vẻ tinh tế bề ngoài là một chất lượng dịch vụ tận tâm, cao cấp đat tiêu chuẩn chất lượng 5*.</p>
    <p style="font-size: 15px;color: #3d3838;">Sứ mệnh cao cả của Thương Tuấn Spa
      Các chị em khi gặp phải các vấn đề về da như: mụn bọc, sạm nám, da sần sùi, thừa cân,… đều không dám giao tiếp, ngại ra ngoài và né tránh chụp ảnh hoặc sợ sệt trước mọi ánh nhìn của xã hội. Đây đều là những biểu hiện của người phụ nữ thiếu tự tin trong cuộc sống, khiến họ mất di nhiều cơ hội trong công việc, cơ hội có được hạnh phúc trong cuộc sống.
      Các vấn đề về da khiến phụ nữ thiếu tự tin, ảnh hưởng đến tâm lý và các hoạt động xã hội
      Thương Tuấn Spa luôn trăn trở và cảm thấy mình cần có trách nhiệm để giúp các chị em thoát khỏi nỗi ám ảnh này. Đến với Thương Tuấn Spa, chúng tôi đem đến sự tự tin để bạn thoải mái thể hiện mình, phô diễn trí tuệ và tài năng của bản thân nhờ làn da mặt mịn màng, vẻ đẹp tự nhiên khiến ai cũng mê mẩn và ngưỡng mộ.
    Hãy đến với Thương Tuấn Spa để bạn được chăm sóc sức khỏe và sắc đẹp như một chính khách của Hoàng Gia !</p>
  </div>
  <div class="  col-xs-12 col-sm-12 col-md-12 col-lg-6 " style="margin-top: 90px;">
   <iframe width="responsive" height="315" width="500" src="https://www.youtube.com/embed/9XLw5v16auY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
</div>
<!-- Facebook comment -->
<div class="fb-comments" data-href="https://thuongtuanspaproject.000webhostapp.com/" data-numposts="5"></div>




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