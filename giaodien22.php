




<?php 
	include("connection_db.php"); 
	 error_reporting(2);
	 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Them san pham</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<body>
		<div class="container" style="margin-top: 50px;">
			<?php error_reporting(1) ?>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="panel panel-info" >
					<div class="panel-heading">
						<h3 class="panel-title" style="text-align: center;color: red;font-size: 30px;font-weight: bold;">Nhập sản phẩm</h3>
					</div>
					<div class="panel-body"  >
						<form action="Insert.php" method="POST" role="form" enctype="multipart/form-data">
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
								<button type="submit" name="addProduct" class="btn btn-warning "    ">Add</button>
							<a href="select.php"><button type="button" name=" " class="btn btn-primary "    ">Xem</button></a>
							<a href="admin.php"><button type="button" name=" " class="btn btn-primary "    >Back</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>

</body>
</html>

