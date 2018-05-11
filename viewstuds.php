<HTML>
<?php 
session_start();
include('dbcon.php');
?>

<head>
	<body>
		<h1><center>Registered Students</center></h1>
		<form method ="POST">
		From:<input type="Date" name="frdate">
		To:<input type="Date" name ="todate">
		<br>
		Date today: <?php echo Date('m/d/Y'); ?>
		<br>
		<input type="submit" name="sortdate" value="Sort">
		<table border = 2>
			<tr>
				<th>StudentID</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Course</th>
				<th>Date Registered</th>
			</tr>
	
		<?php 
		if(isset($_POST['sortdate'])){
			$frdate = $_POST['frdate'];
			$todate = $_POST['todate'];
			$dates_q = mysqli_query($con,"SELECT * FROM studinfo WHERE DateT BETWEEN '$frdate' AND '$todate' ORDER BY DateT ASC");
			while($dates_fill = mysqli_fetch_array($dates_q)){

				?>

				<tr>

				<td><?php echo $dates_fill['StudentID']?></td>
				<td><?php echo $dates_fill['Fname']?></td>
				<td><?php echo $dates_fill['Mname']?></td>
				<td><?php echo $dates_fill['Lname']?></td>
				<td><?php echo $dates_fill['Gender']?></td>
				<td><?php echo $dates_fill['Course']?></td>
				<td><?php echo $dates_fill['DateT']?></td>
			</tr>
			<?php
			}
		}
		?>

</table>
<script>
function printPage() {
    window.print();
}
</script>
<input type="button" value="Print this page" onclick="printPage()" />

</form>
	</body>

</head>

	
</HTML>