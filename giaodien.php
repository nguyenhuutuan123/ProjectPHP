



<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body style="background: #ecfbf8;">
	<!-- container section start -->
	<section id="container" class="">
		<?php
		require_once "admin.php";
		?>
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
		</section>
	</body>
	</html>
