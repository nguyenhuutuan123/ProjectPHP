<?php 
include("connection_db.php");

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
    <meta charset="utf-8">

</head>
<body  style="background: #effcfa;">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
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
                    <li><a href="#" title="Trang Chủ"  id="maumenu"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
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
                    <li><a href="lienhe.php" title="Liên hệ" id="maumenu" ><span class="glyphicon glyphicon-envelope"></span> Liên hệ</a></li>
                    <li><a href="#" title="Shoping Card " id="maumenu" ><span class="glyphicon glyphicon-shopping-cart  hvr-grow a1"></span> My Cart</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">

                <div class="carousel-caption">
                    <h1>Dịch Vụ Spa Tảo Tuan</h1>
                    <p id="chuslide">Hãy đến với Tảo Tuấn Spa để được chăm sóc sức khỏe như một chính khách của hoàng gia</p>
                </div> 
                <iframe style="width:100%;height: 395px" src="https://www.youtube.com/embed/PsiDTMgIWXI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item">
                <img src="Images/face.jpg" alt="New york" style="width:100%;height: 400px">
                <div class="carousel-caption">
                    <h1>Dịch Vụ Spa Tảo Tuấn</h1>
                    <p id="chuslide">Cung cấp các sản phẩm và chất lượng phục vụ tốt nhất</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Xem thêm</a></p>
                </div>
            </div>
            <div class="item">
                <img src="Images/skinface.jpg" alt="New york" style="width:100%;height: 400px;">
                <div class="carousel-caption">
                    <h1>Dịch Vụ Spa Tảo Tuấn</h1>
                    <p id="chuslide">Đảm bảo đạt chuẩn năm sao quốc tế với các chuyên gia hàng đầu thế giới</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Xem thêm</a></p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Trước</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Sau</span>
        </a>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <!-- start features Area --> 
        <section class="features-area section_gap">
            <div class="container">
                <div class="row features-inner">
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="single-features">
                           <div class="f-icon">
                            <img src="Images/features/f-icon1.png" alt="" style=" margin-left: 113px;margin-top: 30px;">
                        </div>
                        <h6 style="text-align: center;">Free Delivery</h6>
                        <p style="text-align: center;">Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="Images/features/f-icon2.png" alt="" style=" margin-left: 113px;margin-top: 30px;">
                        </div>
                        <h6 style="text-align: center;">Return Policy</h6>
                        <p style="text-align: center;"> Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="Images/features/f-icon3.png" alt="" style=" margin-left: 113px;margin-top: 30px;">
                        </div>
                        <h6 style="text-align: center;">24/7 Support</h6>
                        <p style="text-align: center;">Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="Images/features/f-icon4.png" alt="" style="margin-left: 113px;margin-top: 30px;">
                        </div>
                        <h6 style="text-align: center;">Secure Payment</h6>
                        <p style="text-align: center;">Free Shipping on all order</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <center style="color: red ;"><h1> Các dịch vụ nổi bật</h1></center>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php 
    require('connection_db.php');
    $sql1 = "SELECT * FROM Products where category_id =5   limit 3   ;";
    if($result1 = mysqli_query($mysqli, $sql1)){
        if(mysqli_num_rows($result1) > 0){
            while($row = mysqli_fetch_array($result1)){
                ?>
                <div class="col-sm-4">
                    <div class=" thumbnail hovereffect  "  >
                        <a href="products/DetailProduct.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " ></a>
                        <div class="overlay">
                            <h2>Spa Tảo Tuấn</h2>

                            <a class="info" href="read.php?id=<?php echo $row['id'] ?>" style="background: white;">Xem thêm</a>
                            <a class="info" href="#" style="background: white;">Add to card</a>
                        </div>  
                        <div class="caption">
                         <h4 style="color: red;"><center> <?php echo $row['prod_name']; ?></center></h4>
                         <p>
                            <center><h4 style="color: black"> <?php echo $row['new_price']; ?> đ
                                <strike> <?php echo $row['old_price']; ?> đ </strike> </h4></center>
                            </p>
                            <p>

                            </p>
                        </div>
                    </div>
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

<br>







<div class="  col-md-12   wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1" style="background-color: #e3ecec">
    <div class="row">
        <div class="  col-sm-1  ">
        </div>
        <?php 
        require('connection_db.php');
        $sql1 = "SELECT * FROM Products  where id = 4   ;";
        if($result1 = mysqli_query($mysqli, $sql1)){
            if(mysqli_num_rows($result1) > 0){
                while($row = mysqli_fetch_array($result1)){
                   ?>
                   <div class=" col-sm-6   ">
                    <a href="read.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " width="400" height="400" ></a>
                </div>
                <div class="  col-sm-5  ">
                    <h2 sty le="color: black; font-weight: bold;"><?php echo $row['prod_name']; ?></h2>   
                    <h4 style="color: #4d4748;"><?php echo $row['description']; ?></h4> 
                    <h4 id="mauchu"></h4>
                    <p  id="mauchu"><span class="cacgoi">+ Gói 1 : Uốn (Setting / lạnh/ uốn cup phồng/ uốn gọn to ) + cắt, gội, sấy tạo kiểu.</span></p>
                    <p  id="mauchu"><span class="cacgoi">+ Gói 2: Duỗi (Cúp/ thẳng/ tự nhiên) + cắt + gội + sấy tạo kiểu</span></p> 
                    <p id="mauchu"><span class="cacgoi">+ Gói 3: Nhuộm (màu tự nhiên/ màu thời trang/ màu phong thủy) + cắt + gội + sấy tạo kiểu</span></p> 
                    <p id="mauchu"><span class="cacgoi">+ Gói 4: Phục hồi + cắt + gội + sấy tạo kiểu</span></p>
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




<div class="  col-md-12   wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1" style="margin-top: 30px;margin-bottom: 30px;" >
    <div class="row">
<!--  <div class="  col-sm-1  ">
</div> -->
<div class=" col-sm-6   ">
    <h2 style="color: #f809db;font-weight: bold;">Sản phẩm Spa Tảo Tuấn</h2>
    <h2 style="color: black;font-weight: bold;">Thuần thiên nhiên</h2>
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
</div>
<div class="  col-sm-5  ">
    <img  class="img-rounded" width="350" height="300" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-9-1024x683.jpg" style=" "><br><br><br><br>
</div>
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
<div class="row">
    <h2 style="text-align: center;color: #F216F5 ">Tảo Tuấn Hair & Spa
    </h2> 
    <h1 style="text-align: center;color: #020002; font-weight: bold;">Gói ưu đãi tháng 11/2018
    </h1>
</div>
</br>
<div class="row">
    <div class="swiper-container swiper-container-horizontal swiper-container-free-mode ">

        <!-- slider sản phẩm -->
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-20px, 0px, 0px);">
            <?php 
            require('connection_db.php');
            $sql1 = "SELECT * FROM Products where status_id =5;";
            if($result1 = mysqli_query($mysqli, $sql1)){
                if(mysqli_num_rows($result1) > 0){
                   while($row = mysqli_fetch_array($result1)){
                    ?>

                    <div class="swiper-slide">
                        <div class="hovereffect  " data-wow-duration="1s" data-wow-delay="1s" data-wow-interaion="5">
                            <a href="products/DetailProduct.php?id=<?php echo $row['id'] ?>"><img  src="<?php echo  "./uploads/".$row['img'] ?> " ></a>
                            <div class="overlay">
                                <h2>Ưu đãi</h2>
                                <a class="info" href="read.php?id=<?php echo $row['id'] ?>" style="background: white;">Chi tiết</a>
                                 
                            </div>
                            <div class="caption">
                                <h4 style="color: red;"><center> <?php echo $row['prod_name']; ?></center></h4>

                            </div>
                        </div>

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





    <!-- <div class="swiper-slide swiper-slide-prev" >
        <div class="hovereffect "  data-wow-duration="1s"   data-wow-interaion="5">
            <img class="img-rounded" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/ngoc-anh-spa-350x218.jpg" alt="UỐN – DUỖI – NHUỘM  SẢN PHẨM LO`REAL CỦA PHÁP">
            <div class="overlay">
                <h2>Ưu đãi</h2>
                <a class="info" href="#">Chi tiết</a>
            </div>
            <div class="caption">
                <h2><a class="cap" href="#">UỐN – DUỖI – NHUỘM  SẢN PHẨM LO`REAL CỦA PHÁP</a></h2>

            </div>
        </div>
    </div>

    <div class="swiper-slide swiper-slide-prev" >
        <div class="hovereffect  "   data-wow-duration="1s"   data-wow-interaion="5">
            <img class="img-rounded" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/Điều-trị-nám-tàn-nhang-trắng-sáng-da-săn-chắc-da-bằng-tinh-chất-ngọc-trai-350x218.jpg" alt="Công nghệ căng da bằng chỉ Collagen Châu Âu">
            <div class="overlay">
                <h2>Ưu đãi</h2>
                <a class="info" href="#">Chi tiết</a>
            </div>              
            <div class="caption">
                <h2><a class="cap" href="#">Công nghệ căng da bằng chỉ Collagen Châu Âu</a></h2>

            </div>
        </div>
    </div>
    <div class="swiper-slide swiper-slide-active" >
        <div class="hovereffect  "  >
            <img class="img-rounded" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/ngoc-anh-Spa-chat-luong-tai-cao-thang-tphcm-1-350x218.jpg" alt="TIÊM  CĂNG BÓNG DA BẰNG DNA CÁ HỒI.">
            <div class="overlay">
                <h2>Ưu đãi</h2>
                <a class="info" href="#">Chi tiết</a>
            </div>  
            <div class="caption">
                <h2><a class="cap" href="http://ngocanhhairspa.com.vn/tiem-cang-bong-da-bang-dna-ca-hoi/">TIÊM  CĂNG BÓNG DA BẰNG DNA CÁ HỒI.</a></h2>

            </div>
        </div>

    </div>
    <div class="swiper-slide swiper-slide-next">
        <div class="hovereffect  "  >
            <img class="img-rounded" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/Điều-trị-sẹo-rỗ-350x218.jpg" alt="Lăn Kim Trị Sẹo Tăng Sinh Collagen , Trắng Da.">
            <div class="overlay">
                <h2>Ưu đãi</h2>
                <a class="info" href="#">Chi tiết</a>
            </div>
            <div class="caption">
                <h2><a class="cap" href="http://ngocanhhairspa.com.vn/lan-kim-tri-seo-tang-sinh-collagen-trang-da/">Lăn Kim Trị Sẹo Tăng Sinh Collagen , Trắng Da.</a></h2>

            </div>
        </div>
    </div>
    <div class="swiper-slide" >
        <div class="hovereffect" data-wow-duration="1s" data-wow-delay="1s" data-wow-interaion="5">
            <img class="img-rounded" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/CHĂM-SÓC-DA-THẢI-ĐỘC-CHÌ-350x218.jpg" alt="CHĂM SÓC DA + THẢI ĐỘC CHÌ + ĐIỆN DI C.">
            <div class="overlay">
                <h2>Ưu đãi</h2>
                <a class="info" href="#">Chi tiết</a>
            </div>
            <div class="caption">
                <h2><a class="cap"  href="#">CHĂM SÓC DA + THẢI ĐỘC CHÌ + ĐIỆN DI C.</a></h2>

            </div>
        </div>
    </div>

    <div class="swiper-slide" >
        <div class="  hovereffect  " data-wow-duration="1s" data-wow-delay="1s" data-wow-interaion="5">
            <img class="img-rounded" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/09/IPL-LAZER-trị-mụn-2-350x218.jpg" alt="CHĂM SÓC DA : IPL + LAZER  trị mụn , trị thâm , trị nám , trị sạm da">
            <div class="overlay">
                <h2>Ưu đãi</h2>
                <a class="info" href="#">Chi tiết</a>
            </div>
            <div class="caption">
                <h2><a class="cap" href="#">CHĂM SÓC DA:IPL + LAZER trị mụn,trị thâm</a></h2>

            </div>
        </div>
    </div>

</div> -->

<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">   
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span>
    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span>
</div>
</div>
</div>
<script src="swiper-master/dist/js/swiper.min.js"></script>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
<script src="swiper-master/dist/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
<!-- Facebook comment -->


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


<br>
</div>

</body>
<span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span>
</html>