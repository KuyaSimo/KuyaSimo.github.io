<HTML>
<?php include('dbcon.php'); 


	if(isset($_POST('end'))){
		$num1 = $quest_query;
		$ans1 = $choices_query;
		mysqli_query($con,"INSERT INTO compare(number,stud_ans)values('$num1','$ans1')");
	}











?>
		<head>
		<head>
	<body>
		<h1><center>Thank you for thanking the examination, now you may logout</center></h1>
		<form method="POST" action ="index.php">
			<input type="submit" name="logout" value= "Logout">
		</form>
	</body>
</HTML>