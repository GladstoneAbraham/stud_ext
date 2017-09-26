
<?php
include 'function.php';
$sid = $_SESSION['id'];
$namea = $_POST['namea'];
$depta = $_POST['depta'];
$fnamea = $_POST['fnamea'];
$focca = $_POST['focca'];
$mnamea = $_POST['mnamea'];
$mocca = $_POST['mocca'];

// Add your validation and save data to database
$sql = 	"UPDATE `stud_2019` SET `Name`='$namea',`Department`='$depta',`Fathername`='$fnamea',`Fatheroccupation`='$focca',`Mothername`='$mnamea',`Motheroccupation`='$mocca' WHERE `Username` = '$sid'";
$res = mysqli_query($conn,$sql);
if($res)
{
	echo "Updated";
}	
else
{
	echo "Not Updated";
}

?>
