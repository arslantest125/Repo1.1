<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    
        <!-- links for form -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" >
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Mian Blood Bank</title>



<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <style>
    #navbarSupportedContent>ul>li>a:hover {
        background: red;
    }
    </style>

<?php
            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
            {
                $loggedin=true;
            }
            else
            {
              $loggedin = false;
            }
  
   echo '<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Mian Blood Bank/index.php"><img src="images/icon1.png" alt="icon1"
                    width="100" height="90"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:#000"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/Mian Blood Bank/index.php"
                            style="color: black;"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Mian Blood Bank/aboutblood.php" style="color: black;"> <b>About blood</b></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/Mian Blood Bank/aboutus.php" style="color: black;"> <b>About us</b></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/Mian Blood Bank/contactus.php" style="color: black;"> <b>Contact us </b></a>
                    </li>
                </ul>


                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger mx-2" type="submit">Search</button>
                </form>';

                if($loggedin)
                {

             
           echo '<button class="btn btn-outline-danger mx-2" data-bs-toggle="modal" data-bs-target="#login">Login
                </button>
                <button class="btn btn-outline-danger mx-2" data-bs-toggle="modal" data-bs-target="#signup">Signup
                </button>';

                }
            if(!$loggedin)
                {
              echo  '<a href="/Mian Blood Bank/logout.php" class="btn btn-outline-danger mx-2" btn-lg active" role="button" aria-pressed="true" style="margin-top:-15px">Logout</a>';
              
              
              
            //   echo '<li class="nav-item">
            //   <a class="nav-link active" aria-current="page" href="/Mian Blood Bank/index.php">logout</a>
            // </li> ';

        //    echo '<button class="btn btn-outline-danger mx-2" data-bs-toggle="modal" data-bs-target="#Logout">Logout
        //     </button>';
            
                }


          echo  '</div>
        </div>
    </nav>';

?>
    </head>
    
    <body>
    <?php

          
            include "login.php" ;
            include "signup.php"; 
             
       // if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
        // {
        //     echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
        //     <strong>Success!</strong> You can now login
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //       <span aria-hidden="true">&times;</span>
        //     </button>
        // </div>';
        // }

        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
            echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                      <strong>Success!</strong> You can now login
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>';
        }


        if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
            echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                      <strong>Login!</strong> Sucessfull 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>';
        }

        // include "logout.php";
        
        
     ?>