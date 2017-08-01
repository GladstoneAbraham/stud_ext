<?php
	$dbhost='localhost:3306';
	$dbuser='root';
	$dbpass='';
	$dbname='outward'
	$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  	if(!$dbconn)
		print"Could not connect";
	else
		print "Connected";
?>
