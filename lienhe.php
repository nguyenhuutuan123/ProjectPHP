 
<?php 


session_start();
error_reporting(1);
include("connection_db.php");



$sql = "INSERT INTO feedback (name,phone_number, email, feedback) VALUES (?, ?, ?, ?)";

if($stmt = $mysqli->prepare($sql)){

    $stmt->bind_param("ssss", $name, $phone ,$email, $feedback );
    
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $stmt->execute();

} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

$stmt->close();
$mysqli->close(); 

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

    <form method="post" action="lienhe.php?id=<?php echo $row["id"]; ?>">
      <div class="container ">
        <div style="  margin-left: 2%; margin-right: 2%" class="row chitiet">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <section class="background-container background-form" style="background-image: url('Images/backgrDieutri.jpg')">
                    <div class="background-overlay"></div>
                    <div class="container">
                        <div class="text-inner-background">
                            <h1 class="color-white">Tảo Tuấn Spa</h1>
                            <h4 class="color-white">Hãy đến với Thương Tuấn Hair &amp; Spa để bạn được chăm sóc sức khỏe và sắc đẹp như một chính khách của Hoàng Gia!</h4>
                        </div>
                        <div class="background-home-button">

                        </div>
                    </div>
                </section>
            </div>
            <div class="  col-sm-1 ">
            </div>
            <div class=" col-sm-5  " style="border: 8px solid purple;">

            </br> 
            <h3 style="color: #f609fa;font-size: 38px;font-style: italic;font-weight: bold;">Liên hệ</h3> 
            <p style="color: #3f4b4b;">Address : 101B Lê Hữu Trác, Phường Phước Mỹ, Quận Sơn Trà, TP Đà nẵng </p> 
            <p style="color: #3f4b4b;">Email:     tuan.nguyen.106902@gmail.com</p>
            <p style="color: #3f4b4b;" >Phone : 01265982764</p>
            <p style="color: #3f4b4b;">Facebook: https://www.facebook.com</p>  </br>    </br>              

        </div>


        <div class="  col-sm-6  ">
            <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="row" style="margin-top: 10px;">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input style="height: 50px;" type="text" name="name"  class="form-control"   required="required" placeholder=" Your Name ... "  >


                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input style="height: 50px;" type="number" name="phone"  class="form-control"    placeholder=" Your Phone Number ... "  >

                    </div> 
                </div>
                <div class="row"style="margin-top: 15px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input style="height: 50px;" type="Email" name="email" class="form-control" required="required"     placeholder=" Email ... " >

                    </div> 
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <textarea name="feedback"  class="form-control"    rows="4" placeholder=" Feedback ... " required="required"></textarea> 

                    </div>
                </div>
                <div class="row"style="margin-top: 15px;float: right;margin-right: 0px;">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="height: 39px;width: 95px;"> Send</button>
                </div>
            </form>
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