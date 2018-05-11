<HTML>
	<?php 
	session_start();
	include('dbcon.php'); 

	?> 
	<head>
		<title>Online Examination</title>
		<body>
			<h1><center>Online Examination</center></h1>
			<h3><center>Take your exam now <?php echo $_SESSION['useruse'];?></center></h3>
			<form method = "POST" action = "try.php">
				
		<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 1");
				while($quest_fill = mysqli_fetch_array($quest)){
			echo  $quest_fill['numbah']. "." . $quest_fill['question']."<br>";
		}
		?>
		<?php 
		$choice = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 1");	
					while($choices_query = mysqli_fetch_array($choice)){
		?>
		<input type="radio" name = "cho1" value =" <?php echo $choices_query['choice']; ?>">  <?php echo $choices_query['choice']; ?>
		<?php 
		}
		?>
		<br>
		<?php 
			$quest2 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 2");
				while($quest_fill2 = mysqli_fetch_array($quest2)){
			echo  $quest_fill2['numbah']. "." . $quest_fill2['question']."<br>";
		}
		?>

		<?php 
		$choice2 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 2");	
					while($choices_query2 = mysqli_fetch_array($choice2)){
		?>
		<input type="radio" name = "cho2" value =" <?php echo $choices_query2['choice']; ?>" >  <?php echo $choices_query2['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest3 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 3");
				while($quest_fill3 = mysqli_fetch_array($quest3)){
			echo  $quest_fill3['numbah']. "." . $quest_fill3['question']."<br>";
		}
		?>

		<?php 
		$choice3 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 3");	
					while($choices_query3 = mysqli_fetch_array($choice3)){
		?>
		<input type="radio" name = "cho3" value =" <?php echo $choices_query3['choice']; ?>" >  <?php echo $choices_query3['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest4 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 4");
				while($quest_fill4 = mysqli_fetch_array($quest4)){
			echo  $quest_fill4['numbah']. "." . $quest_fill4['question']."<br>";
		}
		?>

		<?php 
		$choice4 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 4");	
					while($choices_query4 = mysqli_fetch_array($choice4)){
		?>
		<input type="radio" name = "cho4" value = " <?php echo $choices_query4['choice']; ?>" >  <?php echo $choices_query4['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest5 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 5");
				while($quest_fill5 = mysqli_fetch_array($quest5)){
			echo  $quest_fill5['numbah']. "." . $quest_fill5['question']."<br>";
		}
		?>

		<?php 
		$choice5 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 5");	
					while($choices_query5 = mysqli_fetch_array($choice5)){
		?>
		<input type="radio" name = "cho5" value = " <?php echo $choices_query5['choice']; ?>" >  <?php echo $choices_query5['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest6 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 6");
				while($quest_fill6 = mysqli_fetch_array($quest6)){
			echo  $quest_fill6['numbah']. "." . $quest_fill6['question']."<br>";
		}
		?>

		<?php 
		$choice6 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 6");	
					while($choices_query6 = mysqli_fetch_array($choice6)){
		?>
		<input type="radio" name = "cho6" value = " <?php echo $choices_query6['choice']; ?>" >  <?php echo $choices_query6['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest7 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 7");
				while($quest_fill7 = mysqli_fetch_array($quest7)){
			echo  $quest_fill7['numbah']. "." . $quest_fill7['question']."<br>";
		}
		?>

		<?php 
		$choice7 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 7");	
					while($choices_query7 = mysqli_fetch_array($choice7)){
		?>
		<input type="radio" name = "cho7" value = " <?php echo $choices_query7['choice']; ?>" >  <?php echo $choices_query7['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest8 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 8");
				while($quest_fill8 = mysqli_fetch_array($quest8)){
			echo  $quest_fill8['numbah']. "." . $quest_fill8['question']."<br>";
		}
		?>

		<?php 
		$choice8 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 8");	
					while($choices_query8 = mysqli_fetch_array($choice8)){
		?>
		<input type="radio" name = "cho8" value = " <?php echo $choices_query8['choice']; ?>">  <?php echo $choices_query8['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest9 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 9");
				while($quest_fill9 = mysqli_fetch_array($quest9)){
			echo  $quest_fill9['numbah']. "." . $quest_fill9['question']."<br>";
		}
		?>

		<?php 
		$choice9 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 9");	
					while($choices_query9 = mysqli_fetch_array($choice9)){
		?>
		<input type="radio" name = "cho9" value = " <?php echo $choices_query9['choice']; ?>">  <?php echo $choices_query9['choice']; ?>
		<?php 
		}
		?>

		<br>
		<?php 
			$quest10 = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 10");
				while($quest_fill10 = mysqli_fetch_array($quest10)){
			echo  $quest_fill10['numbah']. "." . $quest_fill10['question']."<br>";
		}
		?>

		<?php 
		$choice10 = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 10");	
					while($choices_query10 = mysqli_fetch_array($choice10)){
		?>
		<input type="radio" name = "cho10" value = " <?php echo $choices_query10['choice']; ?>" >  <?php echo $choices_query10['choice']; ?>
		<?php 
		}
		?>

				<input type="submit" name="end" value="Submit Answers">
			</form>

			

			
			
		</body>
	</head>

</HTML>