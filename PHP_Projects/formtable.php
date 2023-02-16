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
	<title></title>
</head>
<body>


	<?php

$id =$_POST['id'];
$name =$_POST['name'];
$fname =$_POST['fname'];
$phoneno =$_POST['phoneno'];
$rollno =$_POST['rollno'];
$class =$_POST['class'];
$address =$_POST['address'];

// echo "$id"."<br>". "$name"."<br>". "$fname"."<br>". "$phoneno"."<br>" . "$rollno"."<br>" . "$class" ."<br>". "$address";

// Connect form with database


$con =mysqli_connect('127.0.0.1', 'root','', 'student');

if (mysqli_connect_error()){
	echo "something went wrong!!!";
}

// else{
// 	echo "okay Okay!!!!";
// // 	// code...
// }

// Inserting query into the database

$qry= "INSERT into STUDENT(id,name,fname,phoneno,rollno,class,address)
VALUES ('$id' , '$name','$fname','$phoneno', '$rollno', '$class', '$address')"; 

// // Execute the query with connection

//  step 4 check the query the data is inserted or now

$result = mysqli_query($con,$qry);

if($result)
{
	header('location:index.php');
// 	// code...
}

else{
	echo "Something wrong!!!!";
	// code...
}
?>
<!-- <div class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Father Name</th>
		<th>Phone number</th>
		<th>Roll number</th>
		<th>Class</th>
		<th>Address</th>
	</tr> -->
	

<!-- 
	// foreach ($result as $results) {

	// 	echo "<tr>. 
	// 		<td>".$results['id']. "<td>
	// 		<td>".$results['name']. "<td>
	// 		<td>".$results['fname']. "<td>
	// 		<td>".$results['phoneno']. "<td>
	// 		<td>".$results['rollno']. "<td>
	// 		<td>".$results['class']. "<td>
	// 		<td>".$results['address']. "<td>



	// 	</tr>";
		// code...
	 -->

<!-- </div>
 -->
<!-- // foreach ($result as $results) {
// 	echo $results['$name'];
// 	// code...
// }

 -->


</body>
</html>