<HTML>
	<?php
	include('dbcon.php');
	session_start(); 
	?>
		<head>
		</head>
		<body>
			<center><h1>This is your score <?php echo $_SESSION['useruse']; ?> </h1></center>
			<br>
			<form action = "">
			<center>
				<table border = 2>
					<tr>
						<th>Student ID</th>
						<th>Score</th>
						<th>Average</th>
					</tr>
					<tr>
						
						<?php 
						$studname = $_SESSION['useruse'];
						$sscore_q = mysqli_query($con, "SELECT * FROM studscore WHERE student = '$studname' ");
						$sscore_fill = mysqli_fetch_array($sscore_q);	
						?>

						<td><?php echo $sscore_fill['student'];?></td>
						<td><?php echo $sscore_fill['score']; ?></td>
						<td><?php echo $sscore_fill['raw']; ?></td>
					</tr>
				
			</center>
			</form>

			<form action = "main.php">
					<input type="submit" value = "Go back">
				</form>
		</body>
</HTML>