<?php
include("addcard.php"); 
include("connection_db.php");
session_start(); 


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
<body>
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="Images/logo.png" title="Dịch Vụ Spa Thương Tuấn" style="margin-top: 10px; margin-bottom: 5px;margin-left: -20px; width: 140px;">
                </div>
                <form action="search.php" method="get">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <input type="text" name="search" id="input" class="form-control" placeholder=" Tìm kiếm ..." style="margin-top: 55px; margin-left: 40px">
                    </div>
                    <div class="  col-xs-1 col-sm-1 col-md-1 col-lg-1 ">
                        <button type="submit" name="ok" class="btn btn-danger" style="margin-top: 55px;margin-left: -10px;"><span class="glyphicon glyphicon-search"></span>  </button>
                    </div>
                </form>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="margin-top: 17px;">
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
                        <a href="Login.php"><button type="button" class="btn btn-primary" style="margin-top: 30px;" data-toggle="modal" data-target="#loginModal"  ><span class="glyphicon glyphicon-save"></span>
                        Đăng nhập</button>
                        </a>
                    
                        <a href="Signup.php"><button type="button" class="btn btn-primary" style="margin-top: 20px;    width: 109px;" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-log-in"></span>
                            Đăng ký
                        </button>
                        </a>
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
                            <li><a href="lienhe.php" title="Liên hệ" id="maumenu" ><span class="glyphicon glyphicon-envelope"></span> Liên hệ</a></li>
                            <li><a href="viewcart.php" title="Shoping Card " id="maumenu" ><span class="glyphicon glyphicon-shopping-cart  hvr-grow a1"></span> My Cart</a></li>
                            <li class="dropdown" >
                                <a  id="maumenu" href="#" title="Dịch Vụ Spa"   data-toggle="dropdown"><span class="caret"></span> 
                                </span>
                                <span class="username"><?php echo  $_SESSION["username"] . "<br>"; ?></span>

                            </a>
                            <ul class="dropdown-menu menubar">
                                <li><a href="logout.php" title="Điều Trị">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
</div>
</body>
</html>