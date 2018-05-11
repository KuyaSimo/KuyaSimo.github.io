<?php
	include ('dbcon.php');

	if(isset($_POST['changeUser'])){
		$olduser = $_POST['oldUser'];
		$newuser = $_POST['newUser'];
		$veruser = $_POST['veUser'];
		$chpw = $_POST['VePass'];

		$newquery = mysqli_query($con, "SELECT * FROM useracc WHERE username = '$olduser' ");
		$userquery_rows = mysqli_fetch_array($newquery);

		if(empty($userquery_rows)){
			header('Location:wrongset.php');
		}else{
			if($newuser != $veruser){
				header('Location:wrongusername.php');
			}else{
				if($userquery_rows['password'] != $chpw){
					header('Location:wrongpass.php');
				}else{
					$upd = mysqli_query($con,"UPDATE useracc SET username ='$newuser' WHERE password='$chpw'");
					header('Location:index1.php');
				}
			}

		}
	}
?>