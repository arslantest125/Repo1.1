<?php 

$id= $_GET['id'];
$con =mysqli_connect('127.0.0.1', 'root','', 'student');

if (mysqli_connect_error()){
	echo "something went wrong!!!";
}

// else{
// 	echo "okay Okay!!!!";
// // 	// code...
// }

// Inserting query into the database

$qry= "DELETE from student where id= '$id'"; 

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