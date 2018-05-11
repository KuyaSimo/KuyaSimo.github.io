<?php 
	session_start();
	include('dbcon.php');


		$loguser = $_SESSION['useruse'];
		$quer = mysqli_query($con,"SELECT * FROM useracc WHERE username = '$loguser' ");
		$simo = mysqli_fetch_array($quer);

	?>

<style>
div{
	
	padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
    border-radius: 5px;
    background-color:  #6cb0f0 ;
    padding: 10px;
	width: 100px;
    height: 100px;
	transition: width 2s;
}

#div1 {transition-timing-function: linear;}


div:hover{
 width: 150px;
}

	

</style>
<!DOCTYPE HTML>
	<head>
	 
	
	<title>Welcome faggot</title>
</head>
		<body>
			<center><h1><b>Welcome Summoner <?php echo $_SESSION['useruse']; ?> </b></h1></center>
			
		<center>	<h3> Menu </h3> </center>
	<?php 
	if($simo['level'] == 2 ){ 
	?>
	<center>
		<div>
			<form method = "POST" action = "admin.php">
			<center><input type = "submit" name = "adset" value = "Admin Setting"></center>
			</form>
		</div>
		<div>
			<form method = "POST" action = "register.php">
			<center><input type = "submit" name = "regstud" value ="Register Student"></center>
			</form>
		</div>
		<div>
			<form method = "POST" action = "edit_questions.php">
			<center><input type = "submit" name = "quest" value = "View Questions"></center>
			</form>
		</div>
		<div>
			<form method = "POST" action = "score.php">
			<center><input type ="submit" name = "view" value = "View Score"></center>
			</form>
		</div>
		<div>
			<form method = "POST" action = "index.php">
			<center><input type ="submit" name = "view" value = "Logout"></center>
			</form>
		</div>
		<div>
			<form method = "POST" action = "viewstuds.php">
			<center><input type ="submit" name = "viewstuds" value = "View Registered Students"></center>
			</form>
		</div>
	</center>
		</body>
<?php }
elseif($simo['level'] == 1 and $simo['IDlog'] == 0 ) 
	{ ?>
		<div>
			<form method = "POST" action = "start_exam.php">
			<center><input type = "submit" name = "exam" value = "Start Exam"></center>
			</form>

			<form method = "POST" action = "viewscore.php">
			<center><input type = "submit" name = "scorestud" value = "View Your Score"></center>
			</form>

			<form method = "POST" action = "index.php">
			<center><input type ="submit" name = "view" value = "Logout"></center>
			</form>
		</div>
	<?php } 
		elseif($simo['level'] == 1  and $simo['IDlog'] == 1){
	?> 
	<div>
			<center>
			<h3>YOU HAVE TAKEN THE EXAMINATION</h3>
			</center>
			<form method = "POST" action = "viewscore.php">
			<center><input type = "submit" name = "scorestud" value = "View Your Score"></center>
			</form>

			<form method = "POST" action = "index.php">
			<center><input type ="submit" name = "view" value = "Logout"></center>
			</form>
		</div>		
<?php 
	}
?>

		</body>
</HTML>