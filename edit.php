<HTML>
	<?php 
		include('dbcon.php');
	
		if(isset($_POST['edit'])){
			$question = $_POST['editque'];
			$choice = $_POST['editc1'];
			$answer = $_POST['editq'];

			mysqli_query($con, "UPDATE ques1 SET question = '$question' WHERE numbah = 1 ");
			mysqli_query($con, "UPDATE choices SET choice = '$choice' WHERE numbah = 1 ");
			mysqli_query($con, "UPDATE answer SET ansq = '$answer' WHERE numbah = 1 ");
		header('Location: main.php');
		}
	?>
	

</HTML>