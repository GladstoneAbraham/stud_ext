<?php     include 'display.php'; ?>
<html>
<head>
  <title>
    Order
  </title>
  <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: right;;
    }

    li a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
  }
  p
  {
      font-size: 25px;
      font-family:monospace;
      margin-left: 50px;
  }
  .sri
  {
      margin-left: 90px;
      font-weight: 900;
      font-size: 30px;
      font-family: cursive;
      color:#000000;
      font-weight: bold;
}
  </style>
</head>
<body>
  <h1 class="title">Groceryes</h1>
    <h4>The largest online grocery store</h4>
  <ul>
    <li><a class="active" href="http://localhost/xampp/dbminipro/captain.html">Login</a></li>
    <li><a href="http://localhost/xampp/dbminipro/cap.html">Sign up</a></li>
    <li><a href="con.html">Contact us</a></li>
    <li><a href="index.html">Home</a></li>
  </ul>
  <div class="jumbotron">
  <p>
  Your order has been placed!! Thankyou for shopping with us!<br>
  The products will be delivered in 5 days!<br><br><br>
  Mode of payment:Cash On Delivery<br></p>
  <div class="sri"><table border="1">
    <tr>
      <td>&nbsp;&nbsp;Sl.no&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;Product&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;Rate&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;Quantity&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;Cost&nbsp;&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;1)</td>
      <td>&nbsp;&nbsp;<?php echo "$j"; ?></td>
      <td>&nbsp;&nbsp;Rs.100</td>
      <td>&nbsp;&nbsp;<?php echo "$j"; ?></td>
      <td>&nbsp;&nbsp;Rs.250</td>
    </tr>
  </table></div>

</div>
</body>
</html>
