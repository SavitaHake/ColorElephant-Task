<?php

session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "user_info";
$prefix = "";
 
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");

$name=$_POST['name'];
$profile=$_POST['profile'];
$coverletter=$_POST['coverletter'];
//$file=$_POST['file'];

  if(isset($_REQUEST['insert']))
  {	  
 $sql = mysqli_query($bd, "INSERT INTO pdf(name, profile, coverletter, file)VALUES('$name','$profile', '$coverletter', '$file')");
if(mysqli_query($con,$sql))
{
	echo"successful";
    }
	
echo "iiiiiiiiiiiiiiii";
  }
?>