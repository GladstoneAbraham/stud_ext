<?php
	$a=$_GET["name"];
  	print("Your name is ".$a."<br>");
	$b=$_GET["mail_id"];
	print("Your mail id".$b."<br>");
	$c=$_GET["from"];
	print("From".$c."<br>");
	$d=$_GET["to"];
	print("TO".$d."<br>");
    $dbhost='localhost:3306';
  	$dbuser='root';
  	$dbpass='';
  	$dbconn=mysql_connect($dbhost,$dbuser,$dbpass);
  	if(!$dbconn)
  		print"Could not connect";
  	else
  	print "Connected";
   /* $sql = "CREATE DATABASE mydb";
    $retval=mysql_query($sql,$dbconn);
if (!$retval) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/
$retval=mysql_select_db('mydb');
  	if(!$retval)
  		echo"Error occured while selecting db";

/*  $sql="CREATE TABLE ticket(name varchar(20),mail_id varchar(15),fro varchar(20),too varchar(20))";
	$retval=mysql_query($sql,$dbconn);
	if(!$retval)
		echo"Table not created";
	else
		echo"table created  successfully";
		*/
      $sql="INSERT INTO `mydb`.`ticket` (`name`,`mail_id`,`fro`,`too`) VALUES ('$a','$b','$c','$d')";


      	$retval=mysql_query($sql,$dbconn);
      	if(!$retval)
      		echo"Not inserted";
      	else
      		echo"Inserted successfully";
