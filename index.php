
<?php 
include("connection_db.php"); 
error_reporting(2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin</title>

  <!-- Bootstrap CSS -->
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="csss/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="csss/elegant-icons-style.css" rel="stylesheet" />
  <link href="csss/font-awesome.min.css" rel="stylesheet" />

  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="csss/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="csss/widgets.css" rel="stylesheet">
  <link href="csss/style.css" rel="stylesheet">
  <link href="csss/style-responsive.css" rel="stylesheet" />
  <link href="csss/xcharts.min.css" rel=" stylesheet">
  <link href="csss/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body class="login-img3-body">
    <!-- container section start -->
    <section id="container" class="">


      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.php" class="logo">Tuấn Tảo Spa  -  <span class="lite">Admin</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
          <!--  search form start -->
          <ul class="nav top-menu">
            <li>
              <form class="navbar-form">
                <input class="form-control" placeholder="Search" type="text">
              </form>
            </li>
          </ul>
          <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">

            <!-- task notificatoin start -->
            <li id="task_notificatoin_bar" class="dropdown">

            </ul>
            <!-- notificatoin dropdown end-->
          </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
          <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
              <li class="active">
                <a class="" href="manage_user.php">
                  <i class="icon_house_alt"></i>
                  <span>Manage User</span>
                </a>
              </li>
              <li class="sub-menu">
                <a href="giaodien.php" class="">
                  <i class="icon_document_alt"></i>
                  <span>Add Product</span>
                  
                </a>
              </li>
              <li class="sub-menu">
                <a href="select.php" class="">
                  <i class="icon_desktop"></i>
                  <span>Update Product</span>
                  
                </a>

              </li>
              <li class="sub-menu">
                <a href="manage_cus.php" class="">
                  <i class="icon_desktop"></i>
                  <span>Customer Infor</span>
                   
                </a>

              </li>
              <li >
                <a href="manage_feedback.php" class="">
                  <i class="icon_genius"></i>
                  <span>Manage Feedback</span>
                  
                </a>

              </li>
              <li>
                <a class="" href="login.php">
                  <i class="icon_genius"></i>
                  <span>Log out</span>
                </a>
              </li>


            </ul>
            <!-- sidebar menu end-->
          </div>
        </aside>
        <!--sidebar end-->






        <section id="main-content">
          <section class="wrapper">

          </section>
          <div class="text-right">  
            <div class="credits">
              <a href="https://bootstrapmade.com/">Create </a> by <a href="https://www.linkedin.com/in/nguyen-huu-tuan-42b67b179/">Nguyễn Hữu Tuấn </a> and <a href="https://www.linkedin.com/in/tao-ho/">Hồ Văn Tảo </a>
            </div>
          </div>
        </section>





        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.10.4.min.js"></script>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- nice scroll -->
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- charts scripts -->
        <script src="assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="js/jquery.sparkline.js" type="text/javascript"></script>
        <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="js/owl.carousel.js"></script>
        <!-- jQuery full calendar -->
        <<script src="js/fullcalendar.min.js"></script>
        <!-- Full Google Calendar - Calendar -->
        <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
        <!--script for this page only-->
        <script src="js/calendar-custom.js"></script>
        <script src="js/jquery.rateit.min.js"></script>
        <!-- custom select -->



      </body>

      </html>
