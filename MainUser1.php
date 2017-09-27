<?php
include 'function.php';
error_reporting(0);
$sid = $_SESSION['id'];
$sql = 	"SELECT * FROM `event` WHERE `Username` = '$sid'";
$res = mysqli_query($conn,$sql);
$i = 0;
while($rest = mysqli_fetch_array($res)){
	$evename = $rest['Eventname'];
	$conname = $rest['Contestname'];
	$cash = $rest['Cashprize'];	
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	.intro{
		text-align: center;
		text-shadow: 20rem;
		font-weight: 1000px;
		font-size: 1.5em;
	}
			table {
    border-collapse: collapse;
    width: 800;
    margin-left: auto;
    margin-right: auto;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: rgb(49, 54, 124);
    color: white;
}
</style>
	<title></title>
</head>
<body>
<div class="intro">
	<h2>It’s not whether you win or lose, it’s how you play the game</h2>
</div>
<table>
	<tr>
		<th>Event Name</th>
		<th>Contest Name</th>
		<th>Win</th>
	</tr>
	<tr>

		<td><?php echo $evename; ?></td>
		<td><?php echo $conname; ?></td>
		<td><?php echo $cash; ?></td>
	</tr>
</table>
</body>
</html>