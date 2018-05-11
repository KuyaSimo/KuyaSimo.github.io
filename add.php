<?php 

include('dbcon.php');


				if(isset($_POST['reg'])){
					$ID = $_POST['studID'];
					$pws = $_POST['pass'];
					$fname = $_POST['fname'];
					$mname = $_POST['mname'];
					$lname  = $_POST['lname'];
					$gen = $_POST['gen'];
					$course = $_POST['course'];
					$date = $_POST['dateR'];
					$level = 1;
				mysqli_query($con,"INSERT INTO studinfo(StudentID,Password,Fname,Mname,Lname,Gender,Course,DateT)values('$ID','$pws','$fname','$mname','$lname','$gen','$course','$date')");
				mysqli_query($con,"INSERT INTO useracc(username,password,level)values('$ID','$pws','$level')");
				header("Location:index.php");

				}
			?>