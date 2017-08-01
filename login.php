<?php
//include "db.php";
$con=  mysqli_connect("localhost", "root", "", "user_info");
session_start();

if(empty($_POST["login"]))
{
	 
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM user_info WHERE username = '$username' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);

	if($count == 1)
	{
		$row = mysqli_fetch_array($run_query);
		$_SESSION["user_id"] = $row["user_id"];
		header("location:cover.php");
		echo "savita";
	}
	else
	{
		echo "<script>  alert('Hello! I am an alert box!') </script>";
		header("location:login.php");
	}
	
}
?>