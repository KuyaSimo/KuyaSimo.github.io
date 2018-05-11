<?php


$errstud = $errpw = $errVpw = $errfname = $errmname = $errlast = $errgen = $errcourse = $errdate = "";
$sID = $sPW = $sVP = $sFN = $sMN = $sLN = $sGEN = $sCO = $sDATE = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["studID"])){
			$errstud = "StudentID is required";
		}else{
			$sID = test_input($_POST["studID"]);
		}

		if(empty($_POST["pass"])){
			$errpw = "Password is required";
		}else{
			$sPW = test_input($_POST["pass"]);
		}

		
		
		if(empty($_POST["fname"])){
			$errfname = "First Name  is required";
		}else{
			$sFN = test_input($_POST["fname"]);
		}

		if(empty($_POST["mname"])){
			$errmname = "Middle Name is required";
		}else{
			$sMN = test_input($_POST["mname"]);
		}

		if(empty($_POST["lname"])){
			$errlast = "Last Name is required";
		}else{
			$sLN = test_input($_POST["lname"]);
		}

		if(empty($_POST["gen"])){
			$errgen = "Gender is required";
		}else{
			$sGEN = test_input($_POST["gen"]);
		}

		if(empty($_POST["course"])){
			$errcourse = "Coruse is required";
		}else{
			$sCO = test_input($_POST["course"]);
		}
		if(empty($_POST["dateR"])){
			$errdate = "This field is required";
		}else{
			$sDATE = test_input($_POST["dateR"]);
		}

	}



	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>




<HTML>

	<?php 
	include('dbcon.php');
	?>

		<?php
 if(empty($_POST["studID"]) and empty($_POST["pass"]) and empty($_POST["fname"]) and empty($_POST["mname"]) and empty($_POST["lname"]) and empty($_POST["gen"])and empty($_POST["course"]) and empty($_POST["dateR"])){
		?>
	<head>


	<center><title>Register Student</title></center>
	<center><h3>Register Student</h3></center>
		<body>
			<form method = "POST" action = "">
			Student ID<input type = "text" name = "studID"><br><?php echo $errstud; ?><br>
			Password<input type = "Password" name = "pass"><br><?php echo $errpw; ?><br>
			Verify Password<input type ="Password" name="veripw"><br><?php echo $errVpw; ?><br>
			First Name<input type = "text" name = "fname"><br><?php echo $errfname; ?><br>
			Middle Name<input type = "text" name = "mname"><br><?php echo $errmname; ?><br>
			Last Name<input type = "text" name = "lname"><br><?php echo $errlast; ?><br>
			Gender<select name ="gen">
				<option value=""></option>
				<option value="male">Male</option>
				<option value="female">Female</option><br><?php echo $errgen; ?><br>
			</select>
			Course<select name ="course">
				<option value="0"></option>
				<option value="IT">BSIT</option>
				<option value="CS">BSCS</option>
			</select><br><?php echo $errcourse; ?><br>
			Date of Registration<input type="Date" name="dateR"><br><?php echo $errdate; ?><br>
			<input type="submit" name="reg" value = "Register">

			</form>

		</body> 
	

	<?php }else{ ?>

	<center><title>Register Student</title></center>
	<center><h3>Register Student</h3></center>
		<body>
			<form method = "POST" action = "add.php">
			Student ID<input type = "text" name = "studID"><br><?php echo $errstud; ?>
			Password<input type = "Password" name = "pass"><br><?php echo $errpw; ?>
			Verify Password<input type ="Password" name="veripw"><br><?php echo $errVpw; ?>
			First Name<input type = "text" name = "fname"><br><?php echo $errfname; ?>
			Middle Name<input type = "text" name = "mname"><br><?php echo $errmname; ?>
			Last Name<input type = "text" name = "lname"><br><?php echo $errlast; ?>
			Gender<select name ="gen">
				<option value=""></option>
				<option value="male">Male</option>
				<option value="female">Female</option><br><?php echo $errgen; ?>
			</select>
			Course<select name ="course">
				<option value="0"></option>
				<option value="IT">BSIT</option>
				<option value="CS">BSCS</option>
			</select><br><?php echo $errcourse; ?>
			Date of Registration<input type="Date" name="dateR"><br><?php echo $errdate; ?>
			<input type="submit" name="reg" value = "Register">


			

			</form>
		</body>
		<?php } ?>
	</head>
</HTML>