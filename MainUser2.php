<?php
include 'function.php';
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1> <?php echo "Welcome ".$name." ..!";?></h1>
<form action = "" method = "post">
<table>
<tr>
<th>Event Name</th><td><input type = "text" name = "ename" /></td>
</tr>
<tr>
<th>Contest Name</th><td><input type = "text" name = "cname" /></td>
</tr>
<tr>
<th>Event Venue</th><td><input type = "text" name = "evenue" /></td>
</tr>
<tr>
<th>Event Date</th><td><input type = "date" name = "edate" />
<input type="hidden" name ="status" value ="0"/></td>
</tr>
<tr>
<td><input type = "submit" name ="sub" /></td>
</tr>
</table>
<?php
if(isset($_POST['sub'])){
	$ename = $_POST['ename'];
	$cname = $_POST['cname'];
	$evenue =$_POST['evenue'];
	$edate = $_POST['edate'];
	$status = $_POST['status'];
	$sql = "INSERT INTO `event`(`Username`, `Eventname`, `Contestname`, `Eventvenue`, `Eventdate`, `Status`) VALUES ('$name', '$ename', '$cname', '$evenue', '$edate', $status)";
	$res = $mysqli_query($conn,$sql);
	if($res){?>
	<h3><?php echo "Your Pre-Request has Been Submitted";?></h3>
<?php }}?>
</form>
</body>
</html>