 <?php



   $showAlert=false;
   $showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
 {   
    include '_dbconnect.php';
     
    //print_r($_POST); die();     
    $first_name=$_POST["firstname"];
     $last_name=$_POST["lastname"];
     $username=$_POST["username"];
     $password=$_POST["password"];
     $confrim_password=$_POST["cpassword"];
     
     $exitSql = "SELECT * FROM user_info WHERE username='$username'";

   //  $exits=false;
      // check user already exit or not
      $result = mysqli_query($conn,$exitSql);
      $numExistRows = mysqli_num_rows($result);

   if($numExistRows > 0)
   {
      // $exits = true;
       $showError = " Email already exits";
   }

   else
   {
      // $exits = false ;
  

     if(($password==$confrim_password))
     {

          $hash = password_hash($password , PASSWORD_DEFAULT);
             $sql="INSERT INTO `user_info` (`first_name`, `last_name`, `username`, `password`, `timestamp`)
           VALUES ('$first_name', '$last_name', '$username', '$hash', current_timestamp())";
             $result = mysqli_query($conn,$sql);
          //   var_dump($result); die();

             if($result)
             {
                 $showAlert=true;
                 header("location:/Mian Blood Bank/index.php?signupsuccess=true");
                 exit();
             }

            
     }
     else
             {
                 $showError = "Password does not match ";
             }
            
            }
    
    // header("location:/Mian Blood Bank/index.php");
    header("location:/Mian Blood Bank/index.php?signupsuccess=false&error=$showError");
 }





 ?>






 <?php

    

     if($showAlert)
         {
             echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Sucess</strong> your account is created now you are Login.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             <span aria-hidden="true">&times;</span>
             </div> ' ;
       } 


        if($showError)
        {
         echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error</strong>  '.$showError.'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         <span aria-hidden="true">&times;</span>
         </div> ' ;
        } 
       
       
       
    ?> 

