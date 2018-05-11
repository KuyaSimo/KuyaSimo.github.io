<?php 
include('dbcon.php');
	
		if(isset($_POST['change9'])){
			$question = $_POST['editque'];
			$choice = $_POST['choice9a'];
			$choice2 = $_POST['choice9b'];
			$choice3 = $_POST['choice9c'];
			$choice4 = $_POST['choice9d'];
			$answer = $_POST['editq'];

			mysqli_query($con, "UPDATE ques1 SET question = '$question' WHERE numbah = 9 ");
			mysqli_query($con, "UPDATE choices SET choice = '$choice' WHERE numbah = 9 and idchoice = 1");
			mysqli_query($con, "UPDATE choices SET choice = '$choice2' WHERE numbah = 9 and idchoice = 2");
			mysqli_query($con, "UPDATE choices SET choice = '$choice3' WHERE numbah = 9 and idchoice = 3");
			mysqli_query($con, "UPDATE choices SET choice = '$choice4' WHERE numbah = 9 and idchoice = 4");
			mysqli_query($con, "UPDATE answer SET IDans = '$answer' WHERE numbah = 9 ");
		header('Location: main.php');
		}
	?>