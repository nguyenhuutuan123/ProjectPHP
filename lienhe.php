
 
<?php 
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
    
    
    
    $nn=  "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

$stmt->close();
$mysqli->close(); 

?>




<!DOCTYPE html>
<html>
<head>
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
</head>

<body  style="background: #effcfa;">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
</script>
<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <img src="Images/logo.png" title="Dịch Vụ Spa Thương Tuấn" style="margin-top: 10px; margin-bottom: 5px;margin-left: -20px; width: 140px;">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input type="text" name="" id="input" class="form-control" placeholder=" Tìm kiếm ..." style="margin-top: 55px; margin-left: 40px">
            </div>
            <div class="  col-xs-1 col-sm-1 col-md-1 col-lg-1 ">
                <button type="button" class="btn btn-danger" style="margin-top: 55px;margin-left: -10px;"><span class="glyphicon glyphicon-search"></span>  </button>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5" style="margin-top: 17px;">
                <address class="text-responsive">
                    <strong>Địa chỉ :</strong>
                    101B Lê Hữu Trác, Sơn Trà, Đà Nẵng <br>
                    <strong><abbr title="Phone">Điện thoại:</strong></abbr> 01265982764<br>
                    <strong>Email : </strong><br>
                    <a href="mailto:#">tuan.nguyen.106902@gmail.com</a>
                </address>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <div class="row">

                     <a href="Login.php"><button type="button" class="btn btn-primary" style="margin-top: 30px;" data-toggle="modal" data-target="#loginModal"  ><i class="glyphicon glyphicon-map-marker hvr-grow a"></i>
                        Đăng nhập
                    </button></a>
                    
                    <a href="Signup.php"><button type="button" class="btn btn-primary" style="margin-top: 20px;    width: 109px;" data-toggle="modal" data-target="#signupModal"><i class="glyphicon glyphicon-user  hvr-grow a"></i>
                        Đăng ký
                    </button></a>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="header">
            <nav class="navbar navbar-inverse" style="margin-top: 0px">
                <div class="navbar-header" style="height: 0px" >
                    <a href="home.php" title="Dịch Vụ Spa Thương Tuấn" class="navbar-brand" id="maumenu">Tảo Tuấn Spa</a>
                </div>
                <div class="navbar-header menubar">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse menubar" id="collapse">
                    <ul class="nav navbar-nav navbar-right menubar">
                        <li><a href="home.php" title="Trang Chủ"  id="maumenu"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                        <li><a href="gioithieu.php" title="Giới Thiệu" id="maumenu"> <span class="glyphicon glyphicon-star-empty"></span>Giới thiệu</a></li>
                        <li class="dropdown" >
                            <a  id="maumenu" href="#" title="Dịch Vụ Spa" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Dịch Vụ Spa</a>
                            <ul class="dropdown-menu menubar">
                                <li><a href="dieutri.php" title="Điều Trị">Điều Trị</a></li>
                                <li><a href="#" title="Trắng Da">Trắng Da</a></li>
                                <li><a href="#"  title="Giảm Béo">Giảm Béo</a></li>
                                <li><a href="#" title="Chăm Sóc Gia<">Chăm Sóc Gia</a></li>
                                <li><a href="#" title="Phun Xăm">Phun Xăm</a></li>

                            </ul>
                        </li>

                        <li><a href="baiviet.php" title="Bài Viết"  id="maumenu" ><span class="glyphicon glyphicon-menu-hamburger"></span>Bài Viết</a></li>
                        <li><a href="#" title="Liên hệ" id="maumenu" ><span class="glyphicon glyphicon-envelope"></span> Liên hệ</a></li>
                        <li><a href="#" title="Shopping card " id="maumenu" ><span class="glyphicon glyphicon-shopping-cart  hvr-grow a1"></span> My Cart</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
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
    </div><br></br>

    <!-- thông tin giới thiệu -->
    <div class="row">
        <div class="  col-sm-1 ">
        </div>
        <div class=" col-sm-5  " style="border: 8px solid purple;">
            <div>
            </br> 
            <h3 style="color: #f609fa;font-size: 38px;font-style: italic;font-weight: bold;">Liên hệ</h3> 
            <p style="color: #3f4b4b;">Address : 101B Lê Hữu Trác, Phường Phước Mỹ, Quận Sơn Trà, TP Đà nẵng </p> 
            <p style="color: #3f4b4b;">Email:     tuan.nguyen.106902@gmail.com</p>
            <p style="color: #3f4b4b;" >Phone : 01265982764</p>
            <p style="color: #3f4b4b;">Facebook: https://www.facebook.com</p>  </br>    </br>              
        </div>
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
</div></br> </br> </br> 
<!-- FOOTER -->
<div class="row">
    <section class="footer-container footer-form"  style="background-image: url( 'Images/footerbground.png')">
        <div class="container"> 
            <div class="text-inner-background">
                <center>
                    <!-- <a class="up-arrow" href="#first">aaaaa</a></br> -->
                    <!-- <a href=""><img class="up-arrow" src="Images/logo.png" title="Dịch Vụ Spa Thương Tuấn" style="width: 150px;"></a> -->
                    <label class="mac"> ĐĂNG KÝ NHẬN KHUYẾN MÃI </label>
                </center>
                <div class="row">
                    <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3">
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <input type="text" name="" id="input" class="form-control" placeholder=" Email ..." style="margin-top: -5px; margin-left: 41px;
                        ">
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <button type="button" class="btn btn-danger" style="margin-top: -5px;margin-left:-130px;"><span class="glyphicon glyphicon-envelope"></span> Đăng ký</button>
                    </div>
                </div><br></br>

                <div class="row">
                    <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
                        <p id="mauchu1">Cuộc sống hiện tại vốn xô bồ và ồn ào cho bạn cảm thấy mệt mỏi và căng thẳng. Nhưng chỉ với chút ít thời gian dành cho mình tại Tuấn Thương Skin Face Spa Quý khách sẽ tìm lại được chính mình</p>
                    </div>
                    <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4 center">

                        <p id="mauchu1">Thứ 2 - 6:  9:00 – 18:00</p>
                        <p id="mauchu1">Thứ 2 - 6:  9:00 – 18:00</p>
                        <p id="mauchu1">Thứ 2 - 6:  9:00 – 18:00</p>

                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p id="mauchu1">101B Lê Hữu Trác, Sơn Trà, Đà Nẵng </p>
                        <p id="mauchu1">Đường dây nóng: 01265982764</p>
                        <p id="mauchu1">Email:tuannguyen106902@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="row">      
    <div class="row">
        <div id="icon" class="contact">
            <a href=""><i class="fa fa-facebook-f"></i></a>
            <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter" "></i></a>
            <a href="https://www.w3schools.com/"><i class="fa fa-wifi" "></i></a>
            <a href="https://plus.google.com/u/0/discover"><i class="fa fa-google-plus-square"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="author contact"> Thiết kế bởi: 
            <a href="fb.html">Nguyễn Hữu Tuấn</a>
            <a href="fb.html"> - Hồ Văn Tảo</a>
        </div>
    </div>
</div>
</div>
</body>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span>
</html>