<?php 
	define("SERVER","localhost:3307");
	define("USER","root");
	define("PASS","");
	define("DB","test");
	$conn = mysqli_connect(SERVER,USER,PASS,DB) or die("Invalid database");
	session_start();
?>