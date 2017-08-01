<?php include 'db.php';

		$sql = "SELECT * FROM `mini2` where item='apple'";
		$result = mysqli_query($conn,$sql);
		while($results = mysqli_fetch_array($result)){
      $s=$results['stock'];

    }  echo $s;
    if($s==0)
    {
      echo "Out of stock";
    }
    else if($s<$req)
    {
      echo "Stock is lower than you need";
    }
    else
    {
      echo "Order placed successfully";
    }




 ?>
