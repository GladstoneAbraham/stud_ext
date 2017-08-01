<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Online Student's Co-curricular Activities Management System</h1>
        <div class="sign_in">
            <form action="" method="post">
              Username :<input type="text" name = "uname"><br>
              Date of birth :<input type="text" name = "dob"><br>
              Password :<input type="text" name = "password"><br>
              <input type="submit" name="submit" value"Sign in"><br>
            </form>
        </div>
        <?php
        // put your code here
            include "connect.php"
            $uname = $_POST['uname'];
            $dob = $_POST['dob'];
            $password = $_POST['password'];
            $sql = "select ";
            $retval=mysql_query($sql,$dbconn);
                if(!$retval)
                  echo"Not inserted";
                else
                  echo"Inserted successfully";

        ?>

    </body>
</html>
