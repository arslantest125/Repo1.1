<?php

    $sever="localhost";
    $username="root";
    $password="";
   $database="users";


    $conn=mysqli_connect($sever , $username , $password , $database);

    if(!$conn)
    {
        die("ERROR" . mysqli_connect_error());
    }
   

?>