<?php
	include('dbcon.php');

	if(isset($_POST['changePw'])){
		$chUser = $_POST['chUser'];
		$oldpw = $_POST['oldPass'];
		$newpw = $_POST['newPass'];
		$verpw = $_POST['verPass'];

		$newquery = mysqli_query($con,"SELECT * FROM useracc WHERE username = '$chUser'");
		$pwquery_rows = mysqli_fetch_array($newquery);

		if(empty($pwquery_rows)){
			header('Location:wrongset.php');
		}else{
			if($pwquery_rows['password']!= $oldpw){
				header('Location: wrongpass2.php');

			}else{
				if($newpw != $verpw){
					header('Location:wrongpass3.php');
				}else{
					$upd2 = mysqli_query($con,"UPDATE useracc SET password = '$newpw' WHERE username = '$chUser'");
					header('Location:index1.php');
				}
			}
		}
	}
?>