<?php
	$a=$_GET["name"];
	$b=$_GET["age"];
	$c=$_GET["address"];
	$d=$_GET["city"];
	$e=$_GET["pincode"];
	$g=$_GET["email"];
	$h=$_GET["password"];
	$i=$_GET["item"];
	$j=$_GET["quantity"];
	print("Your name is ".$a."<br>");
	print("Your email is ".$g."<br>");
	print("Your password is ".$h."<br>");
	print("Your age is ".$b."<br>");
	print("Your address is ".$c."<br>");
	print("Your city is ".$d."<br>");
	print("Your pincode is ".$e."<br>");
	print("Your item is ".$i."<br>");
	print("Your quantity is ".$j."<br>");
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
	/*$sql="CREATE TABLE purchase(name varchar(20),email varchar(15),password varchar(15),age int(2),address varchar(20),
	city varchar(15),pincode int(7),item varchar(10),quantity number(2))";
	mysql_query($sql,$dbconn);*/
	//$sql="INSERT INTO 'first'.'purchase' ('name', 'age', 'address', 'city', 'pincode') VALUES ()";
	//$sql="INSERT INTO `first`.`purchase` (`name`, `email`, `password`, `age`, `address`, `city`, `pincode`,'item','quantity') values ('$a','$g','$h','$b','$c','$d','$e','$i','$j')";

$sql="INSERT INTO `first`.`purchase` (`name`, `email`, `password`, `age`, `address`, `city`, `pincode`, `item`, `quantity`) VALUES ('$a','$g','$h','$b','$c','$d','$e','$i','$j')";

	$retval=mysql_query($sql,$dbconn);
	if(!$retval)
		echo"Not inserted";
	else
		echo"Inserted successfully";


	$sql = "SELECT * FROM `mini2` where item='$i'";
	$result = mysql_query($sql,$dbconn);
	while($results = mysql_fetch_array($result)){
		$s=$results['stock'];
	}
	$v=$s-$j;

$sql="UPDATE `mini2` SET `stock`='$v' WHERE item='$i';";
		$retval=mysql_query($sql,$dbconn);
		if(!$retval)
			echo"Not updated";
		else
			echo"Updated successfully";

			mysql_close($dbconn);
?>
<p>
Are you sure you want to proceed
</p>
<a href="final.html"><input type="submit" name="submit"></a>
