<style>
	body{
		margin: 0;
		padding: 0;
		padding-top: 10px;
		
	}
	a{
	 padding-left: 150px;
	 padding-right: 110px;
	 text-decoration: none;
	 font-family: sans-serif;
	 font-weight: bold;
	 font-size: 30px;
	}
	table{
		
		margin: 50px;
	}
</style>





<?php
$con = mysqli_connect('localhost','root','','rps_db');
$sql = "SELECT * FROM subjects";
$result = mysqli_query($con,$sql);
?>
<a href="index.php">Home</a>	|
<a href="add-subject.php">Add Subject</a>	|
<a href="view-subject.php">View Subject</a>
<hr>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<table class="table table striped table-condensed table-hover">
	
	<tr class="bg-warning">
		<th>Subject</th>
		<th>Code</th>
		<th>Credit</th>
		<th>Semester</th>
		<th>Action</th>
	</tr>
	<?php
		while($rows = $result->fetch_assoc())
		{
			?>
			<tr>
				<td><?php echo $rows['subject_name']; ?></td>
				<td><?php echo $rows['code']; ?></td>
				<td><?php echo $rows['credit']; ?></td>
				<td><?php echo $rows['semester_id']; ?></td>
				
				<td><a href="edit-subject.php?id=<?php echo $rows['id']; ?>">Edit </a>  |  <a href="delete_subject.php?id=<?php echo $rows['id']; ?>" onclick="return confirm('Do you want to Delete this Subject?')"> Delete</a></td>
			</tr>
		<?php
		}
	?>
</table>