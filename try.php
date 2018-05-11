<HTML>
	<head>
		<?php 
			include('dbcon.php');
			session_start();

		?>
	</head>
	<body>
		<?php 

				$cho1 = 0;
				$cho2 = 0;
				$cho3 = 0;
				$cho4 = 0;
				$cho5 = 0;
				$cho6 = 0;
				$cho7 = 0;
				$cho8 = 0;
				$cho9 = 0;
				$cho10 = 0;

			
				$cho1 = $_POST['cho1'];
				$cho2 = $_POST['cho2'];
				$cho3 = $_POST['cho3'];
				$cho4 = $_POST['cho4'];
				$cho5 = $_POST['cho5'];
				$cho6 = $_POST['cho6'];
				$cho7 = $_POST['cho7'];
				$cho8 = $_POST['cho8'];
				$cho9 = $_POST['cho9'];
				$cho10 = $_POST['cho10'];
				$right_answer = 0;
				$wrong_answer = 0;

		
		
				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 1 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
				
				$ans_check = $ans_fill['ansq'];
					 

				if($cho1 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 2 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
				
				$ans_check = $ans_fill['ansq'];
					 

				if($cho2 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

		$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 3 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
				
				$ans_check = $ans_fill['ansq'];
					 

				if($cho3 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 4 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
			
				$ans_check = $ans_fill['ansq'];
					 

				if($cho4 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 5 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
			
				$ans_check = $ans_fill['ansq'];
					 

				if($cho5 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 6 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
				
				$ans_check = $ans_fill['ansq'];
					 

				if($cho6 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 7 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
			
				$ans_check = $ans_fill['ansq'];
					 

				if($cho7 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 8 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
			
				$ans_check = $ans_fill['ansq'];
					 

				if($cho8 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 9 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
		
				$ans_check = $ans_fill['ansq'];
					 

				if($cho9 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}

				$ans_query = mysqli_query($con, "SELECT * FROM answer WHERE numbah = 10 ");
				while($ans_fill = mysqli_fetch_array($ans_query)){
			
				$ans_check = $ans_fill['ansq'];
					 

				if($cho10 == $ans_check){
					$right_answer++;
				}else{
					$wrong_answer++;
				}

				}	

				$average = 0;

				$average = $right_answer / 10 * 50 + 50; 




			$sname = $_SESSION['useruse'];
			mysqli_query($con,"INSERT INTO studscore(student,score,raw)values('$sname','$right_answer','$average') ");
			



				include('dbcon.php');
				session_start();

 			

			if(isset($_POST['end'])){
				$IDnum = 1;
				mysqli_query($con, "UPDATE useracc SET IDlog = '$IDnum' WHERE username = '$sname'");
			
			}
		

			header("Location:thank.php");





		?>
		







		</form>
	</body>
</HTML>