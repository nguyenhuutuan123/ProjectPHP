<?php 
	// ham ket noi database 
	error_reporting(1) ;
	header("Content-type: text/html; charset=utf-8");
	
	$mysqli= new mysqli("localhost","root","","PHP_Project");
	mysqli_set_charset($mysqli, 'UTF8');

	//check connection
	if ($mysqli === false) {
		die("Error Could not cennect". $mysqli -> connect_error );
	}	
 ?>