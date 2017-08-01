<?php
	$a=$_GET["name"];
  	print("Your name is ".$a."<br>");
    $dbhost='localhost:3306';
  	$dbuser='root';
  	$dbpass='';
  	$dbconn=mysql_connect($dbhost,$dbuser,$dbpass);
  	if(!$dbconn)
  		print"Could not connect";
  	else
  	print "Connected";
    $sql = "CREATE DATABASE mydb";
    $retval=mysql_query($sql,$dbconn);
if (!$retval) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$retval=mysql_select_db('mydb');
  	if(!$retval)
  		echo"Error occured while selecting db";

  $sql="CREATE TABLE purchase(name varchar(20))";
  mysql_query($sql,$dbconn);
      $sql="INSERT INTO `mydb`.`purchase` (`name`) VALUES ('$a')";

      	$retval=mysql_query($sql,$dbconn);
      	if(!$retval)
      		echo"Not inserted";
      	else
      		echo"Inserted successfully";
