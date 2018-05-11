<?php
session_start();
include('dbcon.php');
include('login.php');

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = $_POST['pw'];

	$query = mysqli_query($con,"SELECT * FROM useracc WHERE username = '$user'");
	$query_rows = mysqli_fetch_array($query);
	$_SESSION['useruse'] = $user;

	if(empty($query_rows)){
		header('Location:error.php');
	}else{
		header('Location:main.php');
	}

	if($query_rows['password'] != $pass){
		header('Location: error.php');
	}else{
		header('Location: main.php');
	}
}
?>