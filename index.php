<?php 

	$erruser = $errpw = "";
	$suser = $spw = "";
	$incorU = $incorP = "";



	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["user"])){
			$erruser = "Username is required";
		}else{
			$suser = test_input($_POST["user"]);
		}

		if(empty($_POST["pw"])){ 
			$errpw = "Password is required";
		}else{
			$spw = test_input($_POST["pw"]);
		}

	}


	

	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
	}

?>

<script>
	$('form').each(function()){
		this.reset()
	});
</script>

<style>
input[type = text],select{
	width: 10%;
	padding: 7px 20px;
	margin:8px 0;
	display: inline-grid;
	border:5px solid #ccc;
	border-radius:4px;
	box-sizing: border-box;
}


input[type = password],select{
	width: 10%;
	padding: 7px 20px;
	margin:8px 0;
	display: inline-grid;
	border:5px solid #ccc;
	border-radius:4px;
	box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
input[type=submit]:hover {
    background-color: #45a049;
}

div {
	padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
    border-radius: 5px;
    background-color:  #6cb0f0 ;
    padding: 10px;
}
	



</style>



<!DOCTYPE HTML>
	<?php 
	include('dbcon.php');
	?>
	 <?php if(empty($_POST["user"]) and empty($_POST["pw"])){ ?>
	<head>
		<title>Mini Online Examination</title>
	</head>
	<body>
		<center><h1>Login Page</h1></center>
	<div>
		<form method="POST" action="">
		<center>Username<input type ="text" name="user"></center> <?php echo $erruser;?></span>
		<center>Password<input type ="password" name="pw"></center> <?php echo $errpw;?></span>
		<center><input type = "submit" name="submit" value="Login"></center>
		</form> 
	</div>
	<?php 
} elseif(!empty($_POST["user"]) and !empty($_POST["pw"])){
	?>

	<head>
		<title>Mini Online Examination</title>
	</head>
	<body>
		<center><h1>Login Page</h1></center>
	<div>
		<form method="POST" action="verification.php">
		<center>Username<input type ="text" name="user"></center> <?php echo $erruser;?></span>
		<center>Password<input type ="password" name="pw"></center> <?php echo $errpw;?></span>
		<center><input type = "submit" name="submit" value="Login"></center>
		</form> 
	</div>
		<?php } ?>


	</body>
</HTML>