<style>
	a{
	 padding-left: 170px;
	 padding-right: 150px;;
	 text-decoration: none;
	 font-family: sans-serif;
	 font-weight: 700;
	 font-size: 20px;
	}
	
	legend{
		font-family: sans-serif;
		font-size: 25px;
	}
	
	label{
		font-family: Roboto;
		font-size: 20px;
	}
	
	form{
		margin: 20px auto;
		width: 50%;
	}
	
	.input{
		width: 50%;
		margin-bottom: 20px;
	}
	
	.input input[type="text"]
	{
		border: none;
		border-bottom: 1px solid #000;
		background: transparent;
		outline: none;
		height: 40px;
		color: #000;
		font-size: 16px;
	}
	
	.btn input[type="reset"], input[type="submit"]
	{
		border: none;
		outline: none;
		height: 40px;
		background: #fb2525;
		color: #fff;
		font-size: 18px;
		border-radius: 10px;
		
	}
	
	select{
		width: 190px;
		height: 30px;
		display: block;
		margin-bottom: 20px;
		margin-top: 20px;
		padding: 10px, 50px, 10px, 10px;
		background: #fff;
		color: #000;
		font-size: 18px;
		border-radius: 10px;
	}
	
	.btn input[type="reset"]:hover, input[type="submit"]:hover
	{
		cursor: pointer;
		background: #ffc107;
		color: #000;
		
	}
	
</style>

<?php
$message='';
if(isset($_POST['Save']))
{
	$subject_name = $_POST['subject_name'];
	$code = $_POST['code'];
	$credit = $_POST['credit'];
	$semester_id = $_POST['semester_id'];
	$con = mysqli_connect('localhost','root','','rps_db');
	$sql = "INSERT INTO subjects(subject_name,code,credit,semester_id) VALUES('$subject_name','$code','$credit',$semester_id)";
	$result = mysqli_query($con,$sql);
	if($result===TRUE)
	{
		$message = "Data INSERT Successfully.";
	}
	
}

?>
<script>
function myFunction() {
  alert("Data INSERTED Successfully");
}
</script>

<a href="index.php">Home</a>	|
<a href="add-subject.php">Add Subject</a>	|
<a href="view-subject.php">View Subject</a>
<hr>
<?php echo $message; ?>
<hr>
<fieldset>
<legend>Add New Subject</legend>
<form action="" method="POST">
	<table>
		
			<tr>
				<td><label>Subject Name: </label></td>
				<td class="input"><input type="text" name="subject_name" placeholder="Subject Name" required> </td>
			</tr>
			<tr>
				<td><label>Code: </label></td>
				<td class="input"><input type="text" name="code" placeholder="Enter Subject Code" required> </td>
			</tr>
			<tr>
				<td><label>Credit</label></td>
				<td class="input"><input type="text" name="credit" placeholder="Enter Subject Credit" required> </td>
			</tr>
			<tr>
				<td><label>Select Semester: </label></td>
				<td>
					<select name="semester_id" required> 
						<option value="">--Select--</option>
						<option value="1">First</option>
						<option value="2">Second</option>
						<option value="3">Third</option>
						<option value="4">Fourth</option>
						<option value="5">Fifth</option>
						<option value="6">Sixth</option>
						<option value="7">Seventh</option>
						<option value="8">Eighth</option>
					</select>	
				</td>
			</tr>
		
		<tr>
			<td class="btn" align="right" colspan="2">
				<input type="reset" name="Clear" value="Clear" required>
				<input onclick="myFunction()" type="submit" name="Save" value="Save" required>
				
			</td>
		</tr>
	</table>
</form>
</fieldset>