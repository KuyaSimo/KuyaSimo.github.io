<?php 
include('dbcon.php');
	
		if(isset($_POST['change2'])){
			$question = $_POST['editque'];
			$choice = $_POST['choice2a'];
			$choice2 = $_POST['choice2b'];
			$choice3 = $_POST['choice2c'];
			$choice4 = $_POST['choice2d'];
			$answer = $_POST['editq'];

			mysqli_query($con, "UPDATE ques1 SET question = '$question' WHERE numbah = 2 ");
			mysqli_query($con, "UPDATE choices SET choice = '$choice' WHERE numbah = 2 and idchoice = 1");
			mysqli_query($con, "UPDATE choices SET choice = '$choice2' WHERE numbah = 2 and idchoice = 2");
			mysqli_query($con, "UPDATE choices SET choice = '$choice3' WHERE numbah = 2 and idchoice = 3");
			mysqli_query($con, "UPDATE choices SET choice = '$choice4' WHERE numbah = 2 and idchoice = 4");
			mysqli_query($con, "UPDATE answer SET IDans = '$answer' WHERE numbah = 2 ");
		header('Location: main.php');
		}
	?>