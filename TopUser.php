<?php
include 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>User -Dashboard</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<div class="navbar">
<ul>
  <li><a class="active" href="MainUser1.php" target="userFrame">Home</a></li>
  <li><a href="MainUser2.php" target="userFrame">Pre-Request</a></li>
  <li><a href="MainUser3.php" target="userFrame">Post-Participation</a></li>
  <li><a href="MainUser4.php" target="userFrame">Profile</a></li>
</ul>
</div>
</body>
</html>