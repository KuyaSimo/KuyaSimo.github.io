<HTML>
<?php  
session_start();

include('dbcon.php');	
?>
	<head>
		<body>
				<h1><center>Score Sheet</center></h1>
				<form action ="main.php">
				<center>

				<table border = 2>
				<tr>
					<th>Student ID</th>
					<th>Score</th>
					<th>Average</th>
				</tr>
					

				<tr>
				<form action = "main.php">
				<input type="submit" name="bmain" value="Back to Main Page">
				</form>
				Sort By:
				<form method = "POST" action = "">
					<select name = "sort">
						<option value = "scoreAsc">Score(Descending)</option>
						<option value = "scoreDesc">Score(Ascending)</option>
						<option value = "studAsc">Student(Ascending)</option>
						<option value = "studDesc">Student(Ascending)</option>
				<input type = "submit" name = "sortBut" value ="Sort">
				
				<?php 
				
			
				if(isset($_POST['sortBut'])){
						$sort = $_POST['sort'];
				if($sort=="scoreAsc"){
					$sort_q = mysqli_query($con,"SELECT * FROM studscore ORDER BY raw ASC");
					while($sort_fill = mysqli_fetch_array($sort_q)){
				?> 
						<tr>
						<td> <?php echo $sort_fill['student']; ?></td>
						<td> <?php echo $sort_fill['score']; ?> </td>
						<td> <?php echo $sort_fill['raw']; ?>   </td>
						</tr>
				<?php	
					} 
					}elseif($sort=="scoreDesc"){
					
					$sort_q = mysqli_query($con,"SELECT * FROM studscore ORDER BY score DESC");
					while($sort_fill = mysqli_fetch_array($sort_q)){
					$sort_q = mysqli_query($con,"SELECT * FROM studscore ORDER BY raw DESC");
					while($sort_fill = mysqli_fetch_array($sort_q)){	
				?> 
						<tr>
						<td> <?php echo $sort_fill['student']; ?></td>
						<td> <?php echo $sort_fill['score']; ?> </td>
						<td> <?php echo $sort_fill['raw']; ?>   </td>
						</tr>
				<?php	
					} 
				}
			}elseif($sort=="studAsc"){
					
					$sort_q = mysqli_query($con,"SELECT * FROM studscore ORDER BY student ASC");
					while($sort_fill = mysqli_fetch_array($sort_q)){
					$sort_q = mysqli_query($con,"SELECT * FROM studscore ORDER BY student ASC");
					while($sort_fill = mysqli_fetch_array($sort_q)){	
				?> 
						<tr>
						<td> <?php echo $sort_fill['student']; ?></td>
						<td> <?php echo $sort_fill['score']; ?> </td>
						<td> <?php echo $sort_fill['raw']; ?>   </td>
						</tr>
				<?php	
					} 
				}
			}elseif($sort=="studDesc"){
					
					$sort_q = mysqli_query($con,"SELECT * FROM studscore ORDER BY student DESC");
					while($sort_fill = mysqli_fetch_array($sort_q)){
					$sort_q = mysqli_query($con,"SELECT * FROM studscore ORDER BY student DESC");
					while($sort_fill = mysqli_fetch_array($sort_q)){	
				?> 
						<tr>
						<td> <?php echo $sort_fill['student']; ?></td>
						<td> <?php echo $sort_fill['score']; ?> </td>
						<td> <?php echo $sort_fill['raw']; ?>   </td>
						</tr>
				<?php	
					} 
				}
			}
		}

				?>
	
		

				
			</tr>


				</form>

				<!--<tr>
				<?php
					/*$show_q = mysqli_query($con,"SELECT * FROM studscore");
					while($score_fill = mysqli_fetch_array($show_q)){
						?> 
						<tr>
						<td> <?php echo $score_fill['student']; ?></td>
						<td> <?php echo $score_fill['score']; ?> </td>
						<td> <?php echo $score_fill['raw']; ?>   </td>
						</tr>
				<?php	}*/ ?>

				
			</tr>-->
			</table>
			</center>

				




		</form>

		</body>
	</head>
	
</HTML>