<?php

$id= $_GET['id'];
// echo $id;

$con =mysqli_connect('127.0.0.1', 'root','', 'student');

if (mysqli_connect_error()){
	echo "something went wrong!!!";
}

$qry="SELECT * FROM student where id ='$id' ";

$result = mysqli_query($con, $qry);

foreach ($result as $row) {
	$name =$row['name'];
	$fname =$row['fname'];
	$phoneno =$row['phoneno'];
	$rollno =$row['rollno'];
	$class =$row['class'];
	$address =$row['address'];
	// code...
}
// echo $name . $fname . $phoneno . $rollno . $class . $address;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="background-image: url('images/back2.jpg'); background-size: cover; width: 100%; ">


    <div class="container">
    	<div class="row">
    		<div class="col-sm-4" style="">
    			
    		</div>
    		<div class="col-sm-4" style="">
    			
          <h1 style="text-align: center; margin-top: 110px; color: white; ">Update Student Form</h1><br>
          <form class="input-fields" action="updateformtable.php" method="post" >
          <input type="hidden" class="text"  name="id" placeholder="id" 
          value= "<?php echo $id ?>" required="" /><br>
          <input type="text" name="name" placeholder="Name" 
          value= "<?php echo $name ?>" required="" /><br>
          <input type="text" name="fname" placeholder="Father Name" 
          value="<?php echo $fname; ?>" required="" /><br>
          <input type="text" name="phoneno" placeholder="Phone no." 
          value="<?php echo $phoneno; ?>" required="" /><br>
          <input type="text" name="rollno" placeholder="Roll no." 
          value="<?php echo $rollno; ?>" required="" /><br>
          <input type="text" name="class" placeholder="Class"  
          value="<?php echo $class; ?>" required="" /><br>
          <input type="text" name="address" placeholder="Address" 
          value="<?php echo $address; ?>" required="" />
        
         <!-- resume preview -->
    
      
   <!--  <div class="output">
   
    </div>  --> 
    <!-- button for toggle   -->
   <!-- <div  style="text-align: center;" onclick="toggle()"> -->
       <input class="btn btn-info" type="submit" name="Update" name="Update">
   </div>
    </form>

    		</div>
    		
    		<div class="col-sm-4">
    			
    		</div>


    	</div>
    	
    </div>
    
   <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="./app.js"></script>
    <script type="text/javascript">

    </script>
</body>
</html>