<?php
include 'function.php';
$sid = $_SESSION['id'];
$sql = 	"SELECT * FROM `stud_2019` WHERE `Username` = '$sid'";	
$res = mysqli_query($conn,$sql);
while($rest = mysqli_fetch_array($res)){
	$uname = $rest['Username'];
	$name = $rest['Name'];
	$dob = $rest['Dateofbirth'];
	$dept = $rest['Department'];
	$fname = $rest['Fathername'];
	$focc = $rest['Fatheroccupation'];
	$mname = $rest['Mothername'];
	$mocc = $rest['Motheroccupation'];
	$enyear = $rest['Entryyear'];
	$exyear = $rest['Exityear'];
	$photo = $rest['Photo'];
}
?>
<html>
<body>
<div>
<h1>Hi <?php echo $name;?> . !!</h1>
</div>

</body>
</html>