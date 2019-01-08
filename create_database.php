<?php 
	 error_reporting(1);
 	include("connection_db.php");
 	
	$sql = " CREATE DATABASE SALE ";
	if ($mysqli-> query($sql) === true) {
		echo "Database create successfuly";
	}else{
		echo "Error : Cound not able execute $sql." .$mysqli -> error;
	}

	$mysqli -> close();	
 ?>