
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

<body style="background: #ecfbf8;">
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
					<div class="container" style="margin-top: 20px; font-family: initial;font-size: 18px;">
						<?php error_reporting(1) ?>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<form action="Insert.php" method="POST" role="form" enctype="multipart/form-data">
								<div class="page-header clearfix">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h2 style="font-family: time new roman" >Thông tin chi tiết sản phẩm </h2>
										</div>

									</div>
								</div>
								<div class="row">
									<div class=" col-sm-4  ">
										<label> Tên sản phẩm </label>
									</div>
									<div class="  col-sm-7  ">
										<input type="text" class="form-control" name="txtName" placeholder="Nhập tên sản phẩm" required/><br>
									</div>
								</div>
								<div class="row">
									<div class="  col-sm-4  ">
										<label> Mã sản phẩm </label>
									</div>
									<div class=" col-sm-7  ">
										<input type="text" class="form-control" name="code" placeholder="Nhập mã sản phẩm" required/><br>
									</div>
								</div>
								<div class="row">
									<div class=" col-sm-4  ">
										<label> Chọn hình ảnh sản phẩm </label>
									</div>
									<div class=" col-sm-7  7">
										<input type="file" name="fileUpload" id="input">
										<span style="color: red"><?php   $notimage; ?></span><br>
									</div>
								</div>
								<div class="row">
									<div class="  col-sm-4   ">
										<label> Danh mục sản phẩm </label>
									</div>
									<div class="  col-sm-7  ">
										<select class="form-control" name="category">
											<?php
											$sql3 = "SELECT * FROM categories";
											$result = mysqli_query($mysqli,$sql3);
											if($result)
											{	 
												while($row = mysqli_fetch_assoc($result))
												{
													?>
													<?php echo $row['cat_name']; ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['cat_name']; ?></option>   
													<?php
												}
											}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class=" col-sm-4  4">
										<br><label> Số lượng sản phẩm </label>
									</div>
									<div class="  col-sm-7 ">
										<br><input type="number" class="form-control" name="txtNumber" placeholder="Nhập số lượng sản phẩm" required/><br>
										<img src="">
									</div>
								</div>
								<div class="row">
									<div class=" col-sm-4  ">
										<label> Giá sản phẩm </label>
									</div>
									<div class="  col-sm-7  ">
										<input type ="number"  class="form-control" name="txtPrice" placeholder="Nhập giá sản phẩm" min="20000" required/><br>
									</div>
								</div>
								<div class="row">
									<div class=" col-sm-4  ">
										<label> Tình Trạng sản phẩm </label>
									</div>
									<div class="  col-sm-7  ">
										<select class="form-control" name="txtStatus">
											<?php
											require_once("connection_db.php");
											$sql3 = "SELECT * FROM status_product";
											$result = mysqli_query($mysqli,$sql3);
											if($result)
											{	 
												while($row = mysqli_fetch_assoc($result))
												{
													?>
													<?php echo $row[' name']; ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['status_name']; ?></option>   
													<?php
												}
											}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="  col-sm-4  ">
										<br><label> Mô tả sản phẩm </label>
									</div>
									<div class=" col-sm-7  ">
										<br><textarea class="form-control" rows="3" name="txtDescript"></textarea><br>
									</div>
								</div>
								<div class="row">
									<div class="  col-sm-4  ">

									</div>
									<div class=" col-sm-2 ">
										<button   class="btn btn-primary btn-lg btn-block" type="submit" name="addProduct"   >Add </button>
									</div>
									<div class="  col-sm-2 ">
										<button  class="btn btn-primary	 btn-lg btn-block" type="reset"value="Reset">Reset</button>
									</div>



								</div>
							</form>
						</div>
					</div>
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
