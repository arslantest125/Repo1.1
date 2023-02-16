<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<?php include "header.php" ?>
<?php include "slider.php" ?>
<?php include "whatsapp.php" ?>

<style>
/* for form information */

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
     background-image: url("");
    background-repeat: no-repeat;
    background-size: 100% 100% 
}

.card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff !important
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}
</style>



<?php



   
     if(isset($_POST['submit']))
     {
        
        $name=$_POST['fname'];
        $last=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
        $subject=$_POST['subject'];
        $msg=$_POST['message'];

    
 
         $to='mustafawaqas0@gmail.com'; // Receiver Email ID, Replace with your email ID

         $subject='Form Submission';

         $message="Name :".$name."\n".  "Last Name :".$last."\n" . "Phone :".$phone."\n".  "Subject :".$subject."\n". "Wrote the following :"."\n\n".$msg;

         $headers="From: ".$email;
 
         if(mail($to, $subject, $message, $headers))
         {
           
           echo  "<div class='alert alert-primary' role='alert'>
           Sent Successfully! Thank you'.' '.$name.' '.$last.', We will contact you shortly!
           </div>";
         }

         else
         {
             echo '<div class="alert alert-primary" role="alert">
             Something went wrong!
             </div>'; 
            
         }
     }
 ?>




<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Contact Us</h3>
            <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for
                you.</p>
            <div class="card">
                <h5 class="text-center mb-4">Main Blood Bank</h5>
                <!-- <form class="form-card" onsubmit="event.preventDefault()"> -->
                <form class="form-card" action="/Mian Blood Bank/contactus.php"     method="POST">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">First name<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="fname" placeholder="Enter your first name"
                                onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last
                                name<span class="text-danger"> *</span></label> <input type="text" id="lname"
                                name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">Your Email<span class="text-danger"> *</span></label>
                            <input type="text" id="email  " name="email" placeholder="" onblur="validate(3)"> </div>

                           

                            <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">Contact No<span class="text-danger"> *</span></label>
                            <input type="text" id="phone" name="phone" placeholder="" onblur="validate(4)"> </div>


                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">Subject :<span class="text-danger"> *</span></label>
                            <!-- <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)">  -->
                            <select class="form-control search-slt" id="subject" name="subject" placeholder="" onblur="validate(5)">
                                    <option><b>Select Subjects</b></option>
                                    <option> Inquiry </option>
                                    <option> Suggestions Or Comments </option>
                                    <option> Login Problem </option>
                                    <option> Advertise Us</option>
                                    <option> Other </option>
                                </select>
                            </div>
                    </div>
                    
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label
                                class="form-control-label px-3">Messages Us<span class="text-danger"> *</span></label>
                            <input type="text" id="message" name="message" placeholder="" onblur="validate(6)"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit"
                                class="btn-block btn-primary">submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php" ?>