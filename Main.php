<?php
		include 'function.php';
		if(isset($_POST['sub'])){
			$user = $_POST['uname'];
			$user = stripslashes($user);
			$user = mysql_real_escape_string($user);
			$pass = $_POST['upass'];
			$dob = $_POST['dob'];
			$dob = date('Y-m-d', strtotime($dob));
			$sql = "SELECT * FROM `stud` where `uname` = '$user' and `Dob` = '$dob'";
			$res = mysqli_query($conn,$sql);
			if($rest = mysqli_fetch_array($res))
				{	if($rest['pass'] == $pass){
					$_SESSION['id'] = $rest['uname'];
					header("Location:user_login.php");
				}
				else{
					echo 'Invalid Password';
				}
				}
		}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
		<style>
		#space1{
			padding-top:100px;
		}
		#sign_in{
			
			display: block;
			margin:auto;
			width: 40%;
			font-size:25px;
			
		}
		input[type=submit] {
			width: 50%;
			height: 30px;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		</style>
    </head>
    <body>
        <h1>Online Student's Co-curricular Activities Management System</h1>
		<form action = "" method = "post">
		<div id="space1">
		</div>
        <div id="sign_in">
		<table>
		<tr>
		<th>
            Username :</th><td><input type="text" name = "uname" value="Username" onclick="value=''"required/><br/></td>
		</tr>
		<tr>
         <th>Date of Birth :<br/></th><td><input type="date" name = "dob" value="(DD-MM-YYYY)" onclick="value=''"required /><br/></td></tr>
		 <tr>
         <th>Password :</th><td><input type="password" name = "upass" value="Password" onclick="value=''" required /><br/></td></tr>
		 <tr>
         <td colspan="2"><input type = "submit" name = "sub" value = "Signin" /></td>
		 </tr>
		</table>
        </div>
		</form>  
			
    </body>
</html>
