<?php 

session_start();  

 // unset($_SESSION["id"]);
 // unset($_SESSION["username"]);
 // 
 // unset($_SESSION["loggedin"]);
if (session_destroy()) {
	 
	echo "<script>alert('ban da dang xuat thanh cong ')</script>";
	 header("location: login.php");
}else {
	echo "<script>alert('chua da xuat')</script>";
}
 
 ?>