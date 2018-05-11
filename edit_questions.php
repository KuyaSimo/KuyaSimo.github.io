<HTML>
<?php  include('dbcon.php'); ?>
	<head>

	<body>

		
			<h1><center>View Questions</center></h1>
<center>
			<form method="POST" action ="editsome.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 1");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		1.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 1 and idchoice = 1");
				while($choice_fill1 = mysqli_fetch_array($choice_q)){
				$cs1a = $choice_fill1;
			?>

			<input type = "text" name = "choice1a" value = "<?php echo $choice_fill1['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 1 and idchoice = 2");
				while($choice_fill2 = mysqli_fetch_array($choice_q)){
				$cs1b = $choice_fill2;
			?>

			<input type = "text" name = "choice1b" value = "<?php echo $choice_fill2['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 1 and idchoice = 3");
				while($choice_fill3 = mysqli_fetch_array($choice_q)){
					$cs1c = $choice_fill3
			?>

			<input type = "text" name = "choice1c" value = "<?php echo $choice_fill3['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 1 and idchoice = 4");
				while($choice_fill4 = mysqli_fetch_array($choice_q)){
					$cs1d = $choice_fill4;
			?>

			<input type = "text" name = "choice1d" value = "<?php echo $choice_fill4['choice']; ?>" >


			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 1");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
				<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change" value ="Edit This number">

		</form>
<hr>
		<form method="POST" action ="editsome2.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 2");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		2.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 2 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice2a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 2 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice2b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 2 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice2c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 2 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice2d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 2");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
				<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change2" value ="Edit This number">

		</form>
		

<hr>
<form method="POST" action ="editsome3.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 3");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		3.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 3 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice3a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 3 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice3b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 3 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice3c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 3 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice3d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 3");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change3" value ="Edit This number">

		</form>
		
<hr>
		<form method="POST" action ="editsome4.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 4");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		4.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 4 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice4a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 4 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice4b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 4 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice4c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 4 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice4d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 4");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change4" value ="Edit This number">

		</form>
		

<hr>
<form method="POST" action ="editsome5.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 5");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		5.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 5 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice5a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 5 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice5b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 5 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice5c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 5 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice5d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 5");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change5" value ="Edit This number">

		</form>
		
<hr>
<form method="POST" action ="editsome6.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 6");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		6.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 6 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice6a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 6 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice6b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 6 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice6c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 6 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 6");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<input type = "text" name = "editq" value = "<?php echo $ans_fill['ansq']; ?>">
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change6" value ="Edit This number">

		</form>
		
		<hr>
<form method="POST" action ="editsome7.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 7");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		7.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 7 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice7a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 7 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice7b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 7 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice7c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 7 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice7d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 7");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change7" value ="Edit This number">

		</form>

	
		<hr>
<form method="POST" action ="editsome8.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 8");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		8.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 8 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice8a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 8 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice8b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 8 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice8c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 8 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice8d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 8");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change8" value ="Edit This number">

		</form>
<hr>
<form method="POST" action ="editsome9.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 9");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		9.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 9 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice9a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 9 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice9b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 9 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice9c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 9 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice9d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 9");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change9" value ="Edit This number">

		</form>

<hr>
<form method="POST" action ="editsome10.php">
			<?php 
			$quest = mysqli_query($con,"SELECT * FROM ques1 WHERE numbah = 1");
				while($quest_fill = mysqli_fetch_array($quest)){
			
			?>
		9.)	<input type = "text" name = "editque" value = "<?php echo $quest_fill['question']; ?>">
			<?php 
			}
			?>	
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 10 and idchoice = 1");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice10a" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 10 and idchoice = 2");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice10b" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>
			
			
<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 10 and idchoice = 3");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice10c" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>

<!-- -->
			<br>
			
			<?php 
				$choice_q = mysqli_query($con, "SELECT * FROM choices WHERE numbah = 10 and idchoice = 4");
				while($choice_fill = mysqli_fetch_array($choice_q)){
			?>

			<input type = "text" name = "choice10d" value = "<?php echo $choice_fill['choice']; ?>" >

			<?php } ?>


			<br>
			Answer: 

			<?php 
				$ans = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 10");
				while($ans_fill = mysqli_fetch_array($ans)){
				
				?>
					<select name = "editq">
				<option value = "1">A </option>
				<option value = "2">B </option>
				<option value = "3">C </option>
				<option value = "4">D </option>
				<?php 
				}
			?>
		

			<br>
			<input type="submit" name="change10" value ="Edit This number">

		</form>
		 <form action = "main.php">
		 	<input type = "submit" value = "Go back">
		 </form>


</center>
		</body>
	</head>
</HTML>