<?php 
	// ham ket noi database 
	error_reporting(1) ;
	$mysqli= new mysqli("localhost","root","","SALE");

	//check connection
	if ($mysqli === false) {
		die("Error Could not cennect". $mysqli -> connect_error );
	}



	
 ?>