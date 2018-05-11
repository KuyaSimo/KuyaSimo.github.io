<?php 
include('dbcon.php');
	
		if(isset($_POST['change10'])){
			$question = $_POST['editque'];
			$choice = $_POST['choice10a'];
			$choice2 = $_POST['choice10b'];
			$choice3 = $_POST['choice10c'];
			$choice4 = $_POST['choice10d'];
			$answer = $_POST['editq'];

			mysqli_query($con, "UPDATE ques1 SET question = '$question' WHERE numbah = 10 ");
			mysqli_query($con, "UPDATE choices SET choice = '$choice' WHERE numbah = 10 and idchoice = 1");
			mysqli_query($con, "UPDATE choices SET choice = '$choice2' WHERE numbah = 10 and idchoice = 2");
			mysqli_query($con, "UPDATE choices SET choice = '$choice3' WHERE numbah = 10 and idchoice = 3");
			mysqli_query($con, "UPDATE choices SET choice = '$choice4' WHERE numbah = 10 and idchoice = 4");
			mysqli_query($con, "UPDATE answer SET IDans = '$answer' WHERE numbah = 10 ");
		header('Location: main.php');
		}
	?>