<?php
  $g=$_GET["email"];
  $h=$_GET["password"];

	$dbhost='localhost:3306';
	$dbuser='root';
	$dbpass='';
	$dbconn=mysql_connect($dbhost,$dbuser,$dbpass);
  if(!$dbconn)
		print"Could not connect";
	else
	print "Connected";
	$retval=mysql_select_db('first');
	if(!$retval)
		echo"Error occured while selecting db";
   $sql="SELECT email from mini where email=";
  $retval=$mysql_query($sql,$dbconn);
