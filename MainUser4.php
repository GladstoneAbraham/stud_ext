<?php
include 'function.php';
error_reporting(0);
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
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<style type="text/css">
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
h2{
	padding: 50px;
	font-size:2.5em;
	font-family: verdana;
	font-style: cursive;
	text-align: center;
}
p{
	text-align: right;
}

button {
	position: relative;
    color: rgba(255,255,255,1);
    text-decoration: none;
    background-color: rgba(86, 92, 183,1);
    
    font-weight: 700;
    font-size: 1.7em;
    display: block;
    padding: 4px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0px 9px 0px rgba(49, 54, 124,1), 0px 9px 25px rgba(0,0,0,.7);
    -moz-box-shadow: 0px 9px 0px rgba(49, 54, 124,1), 0px 9px 25px rgba(0,0,0,.7);
    box-shadow: 0px 9px 0px rgba(49, 54, 124,1), 0px 9px 25px rgba(0,0,0,.7);
    margin: 50px auto;
	width: 140px;
	text-align: center;
	
	-webkit-transition: all .1s ease;
	-moz-transition: all .1s ease;
	-ms-transition: all .1s ease;
	-o-transition: all .1s ease;
	transition: all .1s ease;
}

button:active {
    -webkit-box-shadow: 0px 3px 0px rgba(49, 54, 124,1), 0px 3px 6px rgba(0,0,0,.9);
    -moz-box-shadow: 0px 3px 0px rgba(49, 54, 124,1), 0px 3px 6px rgba(0,0,0,.9);
    box-shadow: 0px 3px 0px rgba(49, 54, 124,1), 0px 3px 6px rgba(0,0,0,.9);
    position: relative;
    top: 6px;
}

</style>




</style>
	</style>
</head>
<body>
<h2>Your Profile</h2>
<div>

<table>
		<tr>
			<th>Name</th>
			<th>Details</th>		
		</tr>
	<tbody>
		<tr><td>User Name</td><td><?php echo $uname;?></td></tr>
		<tr><td>Name</td><td id="edit0" contenteditable="true"><?php echo $name;?></tr>
		<tr><td>Date of Birth</td><td><?php echo $dob;?></tr>
		<tr><td>Department</td><td id="edit1" contenteditable="true"><?php echo $dept;?></tr>
		<tr><td>Father's Name</td><td id="edit2" contenteditable="true"><?php echo $fname;?></tr>
		<tr><td>Father's Occupation</td><td id="edit3" contenteditable="true"><?php echo $focc;?></tr>
		<tr><td>Mother's Name</td><td id="edit4" contenteditable="true"><?php echo $mname;?></tr>
		<tr><td>Mother's Occupation</td><td id="edit5" contenteditable="true"><?php echo $mocc;?></tr>
		<tr><td>Entry year</td><td><?php echo $enyear;?></tr>
		<tr><td>Exit year</td><td><?php echo $exyear;?></tr>
	</tbody>
	
	<script type="text/javascript">
			$(document).ready(function(argument) {
				$('#save').click(function(){
					// Get edit field value
					$nameb = $('#edit0').html();
					$deptb = $('#edit1').html();
					$fnameb = $('#edit2').html();
					$foccb = $('#edit3').html();
					$mnameb = $('#edit4').html();
					$moccb = $('#edit5').html();
					$.ajax({
						url: 'get.php',
						type: 'post',
						data: {namea: $nameb,depta: $deptb,fnamea: $fnameb,focca: $foccb,mnamea: $mnameb,mocca: $moccb},
						datatype: 'html',
						success: function(rsp){
								alert(rsp);
							}
					});
				});
			});
		</script>
</table>

<center><button id="save">Update</button></center>
</div>
<p>If you have any wrong information,then click on the data and change it and click update !</p>


</body>
</html>