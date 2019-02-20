
<?php 
include("connection_db.php"); 
error_reporting(2);

session_start();
if (!isset($_SESSION['username'])) {
  header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  
  <link href="csss/bootstrap-theme.css" rel="stylesheet">

  <link href="csss/elegant-icons-style.css" rel="stylesheet" />
  <link href="csss/font-awesome.min.css" rel="stylesheet" />
  <link href="csss/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link href="csss/widgets.css" rel="stylesheet">
  <link href="csss/style.css" rel="stylesheet">
  <link href="csss/style-responsive.css" rel="stylesheet" />
  <link href="csss/xcharts.min.css" rel=" stylesheet">
  <link href="csss/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>
<body class="login-img3-body">
 <section id="container" class="">
  <header class="header dark-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"> </div>
    </div>

    <!--logo start-->
    <a href="admin.php" class="logo">Tuấn Tảo Spa  -  <span class="lite">Admin</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
      <!--  search form start -->
      <ul class="nav top-menu">
        <li>
          <form class="navbar-form">
            <input class="form-control" placeholder="Search" type="text">
          </form>


          <li><a href="#" title="Trang Chủ"  id="maumenu"><span class="username" style="margin-left: 660px;"><?php echo  $_SESSION["username"] . "<br>"; ?></span></a></li>
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
              <span>Manage User</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="giaodien.php" class="">

              <span>Add Product</span>

            </a>
          </li>
          <li class="sub-menu">
            <a href="select.php" class="">

              <span>Update Product</span>

            </a>

          </li>
          <li class="sub-menu">
            <a href="manage_cus.php" class="">

              <span>Magane order</span>

            </a>

          </li>
          <li >
            <a href="manage_feedback.php" class="">

              <span>Manage Feedback</span>

            </a>

          </li>
          <li>
            <a class="" href="logout.php">
              <span>Log out</span>
            </a>
          </li>


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
  </session>
</body>

</html>
