<?php



 $login=false;
 $showError=false;
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    include '_dbconnect.php';
     //print_r($_POST); die();     
     $username =$_POST["email"];
     $password =$_POST["password"];
   

     //$exits=false;

     //if(($password==$confrim_password) && $exits==false)
    // {
           //  $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
             $sql="SELECT * FROM user_info WHERE username='$username'";
            
            $result = mysqli_query($conn,$sql);
             $num= mysqli_num_rows($result);
             //var_dump($result); die();

             if($num==1)
             {
                 $row = mysqli_fetch_assoc($result);
                //  print_r($row); die();
                 if(password_verify($password , $row['password']))
                 {
                     
                     session_start();
                     $_SESSION['loggedin'] = true;
                     $_SESSION['username'] = $username;
                     $_SESSION['user_id'] = $row['serial_no'];
                     
                     echo "logged in". $username;
                 } 
                 header("Location: /Mian Blood Bank/home.php");  
             }
            //  header("Location: /Mian Blood Bank/home.php");  
        // }

 }

            




?>







<!-- //      if($login)
    //      {
    //          echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    //         <strong>Sucess</strong> you are logged in.
    //          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //          <span aria-hidden="true">&times;</span>
    //          </div> ' ;
    //     } 


    //     if($showError)
    //     {
    //      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Error</strong>  '.$showError.'
    //      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //      <span aria-hidden="true">&times;</span>
    //      </div> ' ;
    //    }  -->