<?php 
session_start();
error_reporting(1);
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
</head>
<body>
	<div class="container">

		<a class="btn btn-primary" data-toggle="modal" href='#order'>Order</a>

		<div class="modal fade" id="order">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								 <CENTER ><h4 class="modal-title" style="color: #f809db;font-weight: bold;font-size: 30px;">Spa Tảo Tuấn </h4> </CENTER>
							</div>
							<div class="row">
								 <CENTER ><h4 class="modal-title" style="color: #f809db;font-weight: bold;font-size: 25px;">Xin Kính Chào Quý Khách !</h4> </CENTER>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<center><h3 class="panel-title" style="color: black;font-weight: bold;font-size: 25px;">Hóa Đơn Thanh Toán</h3></center><br>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Họ và tên :</h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									 <input type="text" name="fullname" id="input" class="form-control" value="" required="required" title="" placeholder="Họ tên">
								</div>

							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Giới tính:</h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<select name="gender" id="input" class="form-control" required="required"   >
										<option value="">Nam</option>
										<option value="">Nữ</option>
										 
									</select>
								</div>

							</div>

							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Số điện thoại : </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="number" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Số điện thoại">
								</div>

							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Email : </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="email" name="email" id="input" class="form-control" value="" required="required" title="" placeholder="Email">
								</div>

							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Địa chỉ : </h4>
								</div>
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<textarea name="address" id="input" class="form-control" rows="2" required="required"></textarea><br>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Ngày order: </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="date" name="dateorder" id="dateorder" class="form-control" value="" required="required" title="" placeholder="Ngày Order ">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Ngày Thực Hiện: </h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									<input type="date" name="dateExcute " id="dateExcute" class="form-control" value="" required="required" title="" placeholder="Ngày Order ">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4>Các dịch vụ :</h4>
								</div>
								<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
									 
								</div>
							</div>

							 
						</div>
						 
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Print</button>
					</div>
				</div>
			</div>
		</div>

	</div>

</body>
</html>