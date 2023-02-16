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

$qry= "UPDATE student set name='$name', fname='$fname', phoneno='$phoneno', rollno='$rollno', class='$class', address='$address' where id='$id'"; 

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
