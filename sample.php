<?php
include 'function.php';
	error_reporting(0);
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
		  $fp = fopen($_FILES['image']['tmp_name'],"r");
		  if($fp){
			  $content = fread($fp, $_FILES['file']['size']);
			  $content = addslashes($content);
			  $content= mysqli_real_escape_string($conn, $content);
			  fclose($fp);
			  $sql = "INSERT INTO `stud_2019`(`Photo`) VALUES ($content)";
			  $res = mysqli_query($sql,$conn);
		  }
          if($res){
		    echo "Success";}
			else{
				echo "Not inserted";
			}
      }else{
         print_r($errors);
		 
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
			
      </form>
      
   </body>
</html>