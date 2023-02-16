<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
	<a class="btn btn-primary" href="form.php">Add Students</a>

	<?php

	$con =mysqli_connect('127.0.0.1', 'root','', 'student');

if (mysqli_connect_error()){
	echo "something went wrong!!!";
}

$qry="SELECT * FROM student";

$results = mysqli_query($con, $qry);

	?>
	<br><br>

	<table class="table" width="100%">
		<tr>
			<th>Id</th><td></td><th></th>
			<th>Name</th><td></td><th></th><th></th>
			<th>Father Name</th>
			<th>Phone Number</th>
			<th>Roll Number</th>
			<th>Class</th><td></td><th></th><th></th>
			<th>Address</th><td></td><th></th><th></th><th></th><th></th><th></th><th></th>
			<th>Edit</th><td></td><th></th><th></th>
			<th>Delete</th><th></th><td></td><th></th><th></th>
		</tr>
	</table>
	<table class="table" width="100%">
		<tr>
					<?php

foreach ($results as $result) {

		echo "<tr> 
			<td>".$result['id']. "<td>
			<td>".$result['name']. "<td>
			<td>".$result['fname']. "<td>
			<td>".$result['phoneno']. "<td>
			<td>".$result['rollno']. "<td>
			<td>".$result['class']. "<td>
			<td>".$result['address']. "<td>
			<td><a href='edit.php?id=".$result ['id']."'  class='btn btn-primary'>Edit</a><td>
			<td><a href='delete.php?id=".$result['id']."' class='btn btn-success'>Delete</a><td>
			
		</tr>";
}

?>
		
</table>
	
	


</body>
</html>