<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


<?php

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
// {
//     $loggedin=true;
// }
// else
// {
//   $loggedin = false;
// }


// if(!$loggedin)
// {
//     header("Location: /Mian Blood Bank/index.php");
// }

// if($loggedin)
// {
//     header("Location: /Mian Blood Bank/home.php");
// }
?>


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

session_start();
// print_r($_SESSION); die();
if(!$_SESSION['loggedin'] == 1){
  // echo getcwd();
  header("location:/Mian Blood Bank/index.php");
} else {
require ('header.php');
require ('slider.php');

?>

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
        
            <h3>Donar Registration Form</h3>
            <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for
                you.</p>
            <div class="card">
                <h5 class="text-center mb-4">Main Blood Bank</h5>
                <!-- <form class="form-card" onsubmit="event.preventDefault()"> -->
                <form class="form-card" action="/Mian Blood Bank/home.php"     method="post">
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
                                class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label>
                            <input type="text" id="phone" name="phone" placeholder="" onblur="validate(3)"> </div>


                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">Blood Group<span class="text-danger"> *</span></label>
                            <!-- <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)">  -->
                            <select class="form-control search-slt" id="blood" name="blood" placeholder="" onblur="validate(4)">
                                    <option><b>Select Blood Group</b></option>
                                    <option> A+ </option>
                                    <option> O+ </option>
                                    <option> B+ </option>
                                    <option> AB+</option>
                                    <option> A- </option>
                                    <option> O- </option>
                                    <option> B- </option>
                                    <option> AB-</option>
                                </select>
                            </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">Province<span class="text-danger"> *</span></label>
                            <!-- <input type="text" id="email" name="email" placeholder="" onblur="validate(3)">  -->
                            <select class="form-control search-slt" id="province" name="province" placeholder="" onblur="validate(5)">
                                    <option><b>Select Province</b></option>
                                    <option> Punjab </option>
                                    <option> Sindh </option>
                                    <option> Balochistan </option>
                                    <option> NWFP </option>

                                </select>
                            
                            </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">City<span class="text-danger"> *</span></label>
                                <!-- <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> -->
                                <select class="form-control search-slt" id="city" name="city" placeholder="" onblur="validate(6)">
                                    <option><b>Select City</b></option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                    <option value="Ahmadpur East">Ahmadpur East</option>
                                    <option value="Ali Khan Abad">Ali Khan Abad</option>
                                    <option value="Alipur">Alipur</option>
                                    <option value="Arifwala">Arifwala</option>
                                    <option value="Attock">Attock</option>
                                    <option value="Bhera">Bhera</option>
                                    <option value="Bhalwal">Bhalwal</option>
                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Bhakkar">Bhakkar</option>
                                    <option value="Burewala">Burewala</option>
                                    <option value="Chillianwala">Chillianwala</option>
                                    <option value="Chakwal">Chakwal</option>
                                    <option value="Chichawatni">Chichawatni</option>
                                    <option value="Chiniot">Chiniot</option>
                                    <option value="Chishtian">Chishtian</option>
                                    <option value="Daska">Daska</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Dhaular">Dhaular</option>
                                    <option value="Dina">Dina</option>
                                    <option value="Dinga">Dinga</option>
                                    <option value="Dipalpur">Dipalpur</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Ferozewala">Ferozewala</option>
                                    <option value="Fateh Jhang">Fateh Jang</option>
                                    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                    <option value="Gojra">Gojra</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Gujrat">Gujrat</option>
                                    <option value="Gujar Khan">Gujar Khan</option>
                                    <option value="Hafizabad">Hafizabad</option>
                                    <option value="Haroonabad">Haroonabad</option>
                                    <option value="Hasilpur">Hasilpur</option>
                                    <option value="Haveli Lakha">Haveli Lakha</option>
                                    <option value="Jatoi">Jatoi</option>
                                    <option value="Jalalpur">Jalalpur</option>
                                    <option value="Jattan">Jattan</option>
                                    <option value="Jampur">Jampur</option>
                                    <option value="Jaranwala">Jaranwala</option>
                                    <option value="Jhang">Jhang</option>
                                    <option value="Jhelum">Jhelum</option>
                                    <option value="Kalabagh">Kalabagh</option>
                                    <option value="Karor Lal Esan">Karor Lal Esan</option>
                                    <option value="Kasur">Kasur</option>
                                    <option value="Kamalia">Kamalia</option>
                                    <option value="Kamoke">Kamoke</option>
                                    <option value="Khanewal">Khanewal</option>
                                    <option value="Khanpur">Khanpur</option>
                                    <option value="Kharian">Kharian</option>
                                    <option value="Khushab">Khushab</option>
                                    <option value="Kot Addu">Kot Addu</option>
                                    <option value="Jauharabad">Jauharabad</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Lalamusa">Lalamusa</option>
                                    <option value="Layyah">Layyah</option>
                                    <option value="Liaquat Pur">Liaquat Pur</option>
                                    <option value="Lodhran">Lodhran</option>
                                    <option value="Malakwal">Malakwal</option>
                                    <option value="Mamoori">Mamoori</option>
                                    <option value="Mailsi">Mailsi</option>
                                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                    <option value="Mian Channu">Mian Channu</option>
                                    <option value="Mianwali">Mianwali</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Murree">Murree</option>
                                    <option value="Muridke">Muridke</option>
                                    <option value="Mianwali Bangla">Mianwali Bangla</option>
                                    <option value="Muzaffargarh">Muzaffargarh</option>
                                    <option value="Narowal">Narowal</option>
                                    <option value="Nankana Sahib">Nankana Sahib</option>
                                    <option value="Okara">Okara</option>
                                    <option value="Renala Khurd">Renala Khurd</option>
                                    <option value="Pakpattan">Pakpattan</option>
                                    <option value="Pattoki">Pattoki</option>
                                    <option value="Pir Mahal">Pir Mahal</option>
                                    <option value="Qaimpur">Qaimpur</option>
                                    <option value="Qila Didar Singh">Qila Didar Singh</option>
                                    <option value="Rabwah">Rabwah</option>
                                    <option value="Raiwind">Raiwind</option>
                                    <option value="Rajanpur">Rajanpur</option>
                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Sadiqabad">Sadiqabad</option>
                                    <option value="Safdarabad">Safdarabad</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Sangla Hill">Sangla Hill</option>
                                    <option value="Sarai Alamgir">Sarai Alamgir</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Shakargarh">Shakargarh</option>
                                    <option value="Sheikhupura">Sheikhupura</option>
                                    <option value="Sialkot">Sialkot</option>
                                    <option value="Sohawa">Sohawa</option>
                                    <option value="Soianwala">Soianwala</option>
                                    <option value="Siranwali">Siranwali</option>
                                    <option value="Talagang">Talagang</option>
                                    <option value="Taxila">Taxila</option>
                                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                                    <option value="Vehari">Vehari</option>
                                    <option value="Wah Cantonment">Wah Cantonment</option>
                                    <option value="Wazirabad">Wazirabad</option>
                                    <!-- <option value="" disabled>Sindh Cities</option> -->
                                    <option value="Badin">Badin</option>
                                    <option value="Bhirkan">Bhirkan</option>
                                    <option value="Rajo Khanani">Rajo Khanani</option>
                                    <option value="Chak">Chak</option>
                                    <option value="Dadu">Dadu</option>
                                    <option value="Digri">Digri</option>
                                    <option value="Diplo">Diplo</option>
                                    <option value="Dokri">Dokri</option>
                                    <option value="Ghotki">Ghotki</option>
                                    <option value="Haala">Haala</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Islamkot">Islamkot</option>
                                    <option value="Jacobabad">Jacobabad</option>
                                    <option value="Jamshoro">Jamshoro</option>
                                    <option value="Jungshahi">Jungshahi</option>
                                    <option value="Kandhkot">Kandhkot</option>
                                    <option value="Kandiaro">Kandiaro</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Kashmore">Kashmore</option>
                                    <option value="Keti Bandar">Keti Bandar</option>
                                    <option value="Khairpur">Khairpur</option>
                                    <option value="Kotri">Kotri</option>
                                    <option value="Larkana">Larkana</option>
                                    <option value="Matiari">Matiari</option>
                                    <option value="Mehar">Mehar</option>
                                    <option value="Mirpur Khas">Mirpur Khas</option>
                                    <option value="Mithani">Mithani</option>
                                    <option value="Mithi">Mithi</option>
                                    <option value="Mehrabpur">Mehrabpur</option>
                                    <option value="Moro">Moro</option>
                                    <option value="Nagarparkar">Nagarparkar</option>
                                    <option value="Naudero">Naudero</option>
                                    <option value="Naushahro Feroze">Naushahro Feroze</option>
                                    <option value="Naushara">Naushara</option>
                                    <option value="Nawabshah">Nawabshah</option>
                                    <option value="Nazimabad">Nazimabad</option>
                                    <option value="Qambar">Qambar</option>
                                    <option value="Qasimabad">Qasimabad</option>
                                    <option value="Ranipur">Ranipur</option>
                                    <option value="Ratodero">Ratodero</option>
                                    <option value="Rohri">Rohri</option>
                                    <option value="Sakrand">Sakrand</option>
                                    <option value="Sanghar">Sanghar</option>
                                    <option value="Shahbandar">Shahbandar</option>
                                    <option value="Shahdadkot">Shahdadkot</option>
                                    <option value="Shahdadpur">Shahdadpur</option>
                                    <option value="Shahpur Chakar">Shahpur Chakar</option>
                                    <option value="Shikarpaur">Shikarpaur</option>
                                    <option value="Sukkur">Sukkur</option>
                                    <option value="Tangwani">Tangwani</option>
                                    <option value="Tando Adam Khan">Tando Adam Khan</option>
                                    <option value="Tando Allahyar">Tando Allahyar</option>
                                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                    <option value="Thatta">Thatta</option>
                                    <option value="Umerkot">Umerkot</option>
                                    <option value="Warah">Warah</option>
                                    <!-- <option value="" disabled>Khyber Cities</option> -->
                                    <option value="Abbottabad">Abbottabad</option>
                                    <option value="Adezai">Adezai</option>
                                    <option value="Alpuri">Alpuri</option>
                                    <option value="Akora Khattak">Akora Khattak</option>
                                    <option value="Ayubia">Ayubia</option>
                                    <option value="Banda Daud Shah">Banda Daud Shah</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Batkhela">Batkhela</option>
                                    <option value="Battagram">Battagram</option>
                                    <option value="Birote">Birote</option>
                                    <option value="Chakdara">Chakdara</option>
                                    <option value="Charsadda">Charsadda</option>
                                    <option value="Chitral">Chitral</option>
                                    <option value="Daggar">Daggar</option>
                                    <option value="Dargai">Dargai</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                    <option value="Doaba">Doaba</option>
                                    <option value="Dir">Dir</option>
                                    <option value="Drosh">Drosh</option>
                                    <option value="Hangu">Hangu</option>
                                    <option value="Haripur">Haripur</option>
                                    <option value="Karak">Karak</option>
                                    <option value="Kohat">Kohat</option>
                                    <option value="Kulachi">Kulachi</option>
                                    <option value="Lakki Marwat">Lakki Marwat</option>
                                    <option value="Latamber">Latamber</option>
                                    <option value="Madyan">Madyan</option>
                                    <option value="Mansehra">Mansehra</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Mastuj">Mastuj</option>
                                    <option value="Mingora">Mingora</option>
                                    <option value="Nowshera">Nowshera</option>
                                    <option value="Paharpur">Paharpur</option>
                                    <option value="Pabbi">Pabbi</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Saidu Sharif">Saidu Sharif</option>
                                    <option value="Shorkot">Shorkot</option>
                                    <option value="Shewa Adda">Shewa Adda</option>
                                    <option value="Swabi">Swabi</option>
                                    <option value="Swat">Swat</option>
                                    <option value="Tangi">Tangi</option>
                                    <option value="Tank">Tank</option>
                                    <option value="Thall">Thall</option>
                                    <option value="Timergara">Timergara</option>
                                    <option value="Tordher">Tordher</option>
                                    <!-- <option value="" disabled>Balochistan Cities</option> -->
                                    <option value="Awaran">Awaran</option>
                                    <option value="Barkhan">Barkhan</option>
                                    <option value="Chagai">Chagai</option>
                                    <option value="Dera Bugti">Dera Bugti</option>
                                    <option value="Gwadar">Gwadar</option>
                                    <option value="Harnai">Harnai</option>
                                    <option value="Jafarabad">Jafarabad</option>
                                    <option value="Jhal Magsi">Jhal Magsi</option>
                                    <option value="Kacchi">Kacchi</option>
                                    <option value="Kalat">Kalat</option>
                                    <option value="Kech">Kech</option>
                                    <option value="Kharan">Kharan</option>
                                    <option value="Khuzdar">Khuzdar</option>
                                    <option value="Killa Abdullah">Killa Abdullah</option>
                                    <option value="Killa Saifullah">Killa Saifullah</option>
                                    <option value="Kohlu">Kohlu</option>
                                    <option value="Lasbela">Lasbela</option>
                                    <option value="Lehri">Lehri</option>
                                    <option value="Loralai">Loralai</option>
                                    <option value="Mastung">Mastung</option>
                                    <option value="Musakhel">Musakhel</option>
                                    <option value="Nasirabad">Nasirabad</option>
                                    <option value="Nushki">Nushki</option>
                                    <option value="Panjgur">Panjgur</option>
                                    <option value="Pishin Valley">Pishin Valley</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Sherani">Sherani</option>
                                    <option value="Sibi">Sibi</option>
                                    <option value="Sohbatpur">Sohbatpur</option>
                                    <option value="Washuk">Washuk</option>
                                    <option value="Zhob">Zhob</option>
                                    <option value="Ziarat">Ziarat</option>
                                </select>
                            
                             </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label
                                class="form-control-label px-3">Last time donate<span class="text-danger"> *</span></label>
                            <!-- <input type="text" id="email" name="email" placeholder="" onblur="validate(3)">  -->
                            <select class="form-control search-slt" id="lasttime" name="lasttime" placeholder="" onblur="validate(7)">
                            <option><b>Select month </b></option>
                                    <option> 1 Month </option>
                                    <option> 2 Month </option>
                                    <option> 3 Month </option>
                                    <option> 4 Month </option>
                                    <option> 5 Month </option>
                                    <option> 6 Month </option>
                                    <option> 7 Month </option>
                                    <option> 8 Month </option>
                                    <option> 9 Month </option>
                                    <option> 10 Month </option>
                                    <option> 11 Month </option>
                                    <option> 1 Year </option>
                                    <option> More than 1 year </option>

                                </select>
                            
                            </div>

                    
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label
                                class="form-control-label px-3">Address<span class="text-danger"> *</span></label>
                            <input type="text" id="address" name="address" placeholder="" onblur="validate(8)"> </div>
                    </div>
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id'] ?>" />
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit"
                                class="btn-block btn-primary">submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- <script>
function validate(val) {
    v1 = document.getElementById("fname");
    v2 = document.getElementById("lname");
    v3 = document.getElementById("phone");
    v4 = document.getElementById("blood");
    v5 = document.getElementById("province");
    v6 = document.getElementById("city");
    v7 = document.getElementById("lasttime");
    v8 = document.getElementById("address");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;
    flag7 = true;
    flag8 = true;


    if (val >= 1 || val == 0) {
        if (v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        } else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if (val >= 2 || val == 0) {
        if (v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        } else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if (val >= 3 || val == 0) {
        if (v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        } else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
    if (val >= 4 || val == 0) {
        if (v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        } else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if (val >= 5 || val == 0) {
        if (v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        } else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }


    if (val >= 6 || val == 0)
     {
        if (v6.value == "")
         {
            v6.style.borderColor = "red";
            flag6 = false;
         } else
         {
            v6.style.borderColor = "green";
            flag6 = true;
       ] }
    }

    if (val >= 7 || val == 0)
     {
        if (v7.value == "")
         {
            v7.style.borderColor = "red";
            flag7 = false;
         } else
         {
            v7.style.borderColor = "green";
            flag7 = true;
       ] }
    }

    if (val >= 8 || val == 0)
     {
        if (v8.value == "")
         {
            v8.style.borderColor = "red";
            flag8 = false;
         } else
         {
            v8.style.borderColor = "green";
            flag8 = true;
       ] }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag7 && flag8;

    return flag;
}
</script> -->
<?php  
    

    $insert = false;
    $update = false;
    $delete = false;
    $result= "";

include '_dbconnect.php';

if(isset($_GET['delete'])){
  $serialno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `donar_info` WHERE `serialno` = $serialno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // echo $_POST['serialno']; die();
  if (isset($_POST['serialnoEdit']))
  {
  // Update the record
  // print_r($_POST);
    $serialno = $_POST["serialnoEdit"];
    
    $firstname =$_POST["fnameEdit"];
     $lastname =$_POST["lnameEdit"];
     $phonenumber =$_POST["phoneEdit"];
     $bloodgroup =$_POST["bloodEdit"];
     $province =$_POST["provinceEdit"];
     $city =$_POST["cityEdit"];
     $lasttime =$_POST["lasttimeEdit"];
     $address =$_POST["addressEdit"];
     
    // $title = $_POST["titleEdit"];
    // $description = $_POST["descriptionEdit"];

  // Sql query to be executed
//   $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`serialno` = $serialno";
//   $result = mysqli_query($conn, $sql);

    $sql="UPDATE `donar_info` SET `firstname`='$firstname' , `lastname`='$lastname' , `phone`='$phonenumber' , `blood`='$bloodgroup' , `province`='$province' , `city`='$city' ,
    `lasttime`='$lastname' , `address`='$address' WHERE `serialno` = $serialno";
    // echo $sql; die(); 
    $result = mysqli_query($conn, $sql);

  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}

}
else{

    $firstname =$_POST["fname"];
    $user_id =$_POST["user_id"];
     $lastname =$_POST["lname"];
     $phonenumber =$_POST["phone"];
     $bloodgroup =$_POST["blood"];
     $province =$_POST["province"];
     $city =$_POST["city"];
     $lasttime =$_POST["lasttime"];
     $address =$_POST["address"];
    //  print_r($user_id); die();

  // Sql query to be executed
  $sql="INSERT INTO `donar_info` (`firstname`, `lastname`,`user_id`, `phone`, `blood`, `province`, `city`, `lasttime`, `address`, `timestamp`)
  VALUES ( '$firstname', '$lastname', '$user_id','$phonenumber', '$bloodgroup', '$province', '$city', '$lasttime', '$address', current_timestamp())";


//   $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $sql);


   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>



  <!-- Edit Modal -->
  <!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div> -->

        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"><img src="images/icon1.png" alt="icon1" style="margin-left:170px"
                        width="100" height="90"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <form action="/Mian Blood Bank/home.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="serialnoEdit" id="serialnoEdit">
            <div class="form-group">
              <label for="title">First name</label>
              <input type="text" class="form-control" id="fnameEdit" name="fnameEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="title">Last name</label>
              <input type="text" class="form-control" id="lnameEdit" name="lnameEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="title">Phone No</label>
              <input type="text" class="form-control" id="phoneEdit" name="phoneEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="title">Blood Group</label>
              <select class="form-control search-slt" id="bloodEdit" name="bloodEdit" placeholder="">
                                    <option><b>Select Blood Group</b></option>
                                    <option> A+ </option>
                                    <option> O+ </option>
                                    <option> B+ </option>
                                    <option> AB+</option>
                                    <option> A- </option>
                                    <option> O- </option>
                                    <option> B- </option>
                                    <option> AB-</option>
                                </select>
            </div>

            <div class="form-group">
              <label for="title">Province</label>
              <select class="form-control search-slt" id="provinceEdit" name="provinceEdit" placeholder="" >
                                    <option><b>Select Province</b></option>
                                    <option> Punjab </option>
                                    <option> Sindh </option>
                                    <option> Balochistan </option>
                                    <option> NWFP </option>

                                </select>
            </div>

            <div class="form-group">
              <label for="title">City</label>
              <select class="form-control search-slt" id="cityEdit" name="cityEdit" placeholder="" >
                                    <option><b>Select City</b></option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                    <option value="Ahmadpur East">Ahmadpur East</option>
                                    <option value="Ali Khan Abad">Ali Khan Abad</option>
                                    <option value="Alipur">Alipur</option>
                                    <option value="Arifwala">Arifwala</option>
                                    <option value="Attock">Attock</option>
                                    <option value="Bhera">Bhera</option>
                                    <option value="Bhalwal">Bhalwal</option>
                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Bhakkar">Bhakkar</option>
                                    <option value="Burewala">Burewala</option>
                                    <option value="Chillianwala">Chillianwala</option>
                                    <option value="Chakwal">Chakwal</option>
                                    <option value="Chichawatni">Chichawatni</option>
                                    <option value="Chiniot">Chiniot</option>
                                    <option value="Chishtian">Chishtian</option>
                                    <option value="Daska">Daska</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Dhaular">Dhaular</option>
                                    <option value="Dina">Dina</option>
                                    <option value="Dinga">Dinga</option>
                                    <option value="Dipalpur">Dipalpur</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Ferozewala">Ferozewala</option>
                                    <option value="Fateh Jhang">Fateh Jang</option>
                                    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                    <option value="Gojra">Gojra</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Gujrat">Gujrat</option>
                                    <option value="Gujar Khan">Gujar Khan</option>
                                    <option value="Hafizabad">Hafizabad</option>
                                    <option value="Haroonabad">Haroonabad</option>
                                    <option value="Hasilpur">Hasilpur</option>
                                    <option value="Haveli Lakha">Haveli Lakha</option>
                                    <option value="Jatoi">Jatoi</option>
                                    <option value="Jalalpur">Jalalpur</option>
                                    <option value="Jattan">Jattan</option>
                                    <option value="Jampur">Jampur</option>
                                    <option value="Jaranwala">Jaranwala</option>
                                    <option value="Jhang">Jhang</option>
                                    <option value="Jhelum">Jhelum</option>
                                    <option value="Kalabagh">Kalabagh</option>
                                    <option value="Karor Lal Esan">Karor Lal Esan</option>
                                    <option value="Kasur">Kasur</option>
                                    <option value="Kamalia">Kamalia</option>
                                    <option value="Kamoke">Kamoke</option>
                                    <option value="Khanewal">Khanewal</option>
                                    <option value="Khanpur">Khanpur</option>
                                    <option value="Kharian">Kharian</option>
                                    <option value="Khushab">Khushab</option>
                                    <option value="Kot Addu">Kot Addu</option>
                                    <option value="Jauharabad">Jauharabad</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Lalamusa">Lalamusa</option>
                                    <option value="Layyah">Layyah</option>
                                    <option value="Liaquat Pur">Liaquat Pur</option>
                                    <option value="Lodhran">Lodhran</option>
                                    <option value="Malakwal">Malakwal</option>
                                    <option value="Mamoori">Mamoori</option>
                                    <option value="Mailsi">Mailsi</option>
                                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                    <option value="Mian Channu">Mian Channu</option>
                                    <option value="Mianwali">Mianwali</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Murree">Murree</option>
                                    <option value="Muridke">Muridke</option>
                                    <option value="Mianwali Bangla">Mianwali Bangla</option>
                                    <option value="Muzaffargarh">Muzaffargarh</option>
                                    <option value="Narowal">Narowal</option>
                                    <option value="Nankana Sahib">Nankana Sahib</option>
                                    <option value="Okara">Okara</option>
                                    <option value="Renala Khurd">Renala Khurd</option>
                                    <option value="Pakpattan">Pakpattan</option>
                                    <option value="Pattoki">Pattoki</option>
                                    <option value="Pir Mahal">Pir Mahal</option>
                                    <option value="Qaimpur">Qaimpur</option>
                                    <option value="Qila Didar Singh">Qila Didar Singh</option>
                                    <option value="Rabwah">Rabwah</option>
                                    <option value="Raiwind">Raiwind</option>
                                    <option value="Rajanpur">Rajanpur</option>
                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Sadiqabad">Sadiqabad</option>
                                    <option value="Safdarabad">Safdarabad</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Sangla Hill">Sangla Hill</option>
                                    <option value="Sarai Alamgir">Sarai Alamgir</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Shakargarh">Shakargarh</option>
                                    <option value="Sheikhupura">Sheikhupura</option>
                                    <option value="Sialkot">Sialkot</option>
                                    <option value="Sohawa">Sohawa</option>
                                    <option value="Soianwala">Soianwala</option>
                                    <option value="Siranwali">Siranwali</option>
                                    <option value="Talagang">Talagang</option>
                                    <option value="Taxila">Taxila</option>
                                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                                    <option value="Vehari">Vehari</option>
                                    <option value="Wah Cantonment">Wah Cantonment</option>
                                    <option value="Wazirabad">Wazirabad</option>
                                    <!-- <option value="" disabled>Sindh Cities</option> -->
                                    <option value="Badin">Badin</option>
                                    <option value="Bhirkan">Bhirkan</option>
                                    <option value="Rajo Khanani">Rajo Khanani</option>
                                    <option value="Chak">Chak</option>
                                    <option value="Dadu">Dadu</option>
                                    <option value="Digri">Digri</option>
                                    <option value="Diplo">Diplo</option>
                                    <option value="Dokri">Dokri</option>
                                    <option value="Ghotki">Ghotki</option>
                                    <option value="Haala">Haala</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Islamkot">Islamkot</option>
                                    <option value="Jacobabad">Jacobabad</option>
                                    <option value="Jamshoro">Jamshoro</option>
                                    <option value="Jungshahi">Jungshahi</option>
                                    <option value="Kandhkot">Kandhkot</option>
                                    <option value="Kandiaro">Kandiaro</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Kashmore">Kashmore</option>
                                    <option value="Keti Bandar">Keti Bandar</option>
                                    <option value="Khairpur">Khairpur</option>
                                    <option value="Kotri">Kotri</option>
                                    <option value="Larkana">Larkana</option>
                                    <option value="Matiari">Matiari</option>
                                    <option value="Mehar">Mehar</option>
                                    <option value="Mirpur Khas">Mirpur Khas</option>
                                    <option value="Mithani">Mithani</option>
                                    <option value="Mithi">Mithi</option>
                                    <option value="Mehrabpur">Mehrabpur</option>
                                    <option value="Moro">Moro</option>
                                    <option value="Nagarparkar">Nagarparkar</option>
                                    <option value="Naudero">Naudero</option>
                                    <option value="Naushahro Feroze">Naushahro Feroze</option>
                                    <option value="Naushara">Naushara</option>
                                    <option value="Nawabshah">Nawabshah</option>
                                    <option value="Nazimabad">Nazimabad</option>
                                    <option value="Qambar">Qambar</option>
                                    <option value="Qasimabad">Qasimabad</option>
                                    <option value="Ranipur">Ranipur</option>
                                    <option value="Ratodero">Ratodero</option>
                                    <option value="Rohri">Rohri</option>
                                    <option value="Sakrand">Sakrand</option>
                                    <option value="Sanghar">Sanghar</option>
                                    <option value="Shahbandar">Shahbandar</option>
                                    <option value="Shahdadkot">Shahdadkot</option>
                                    <option value="Shahdadpur">Shahdadpur</option>
                                    <option value="Shahpur Chakar">Shahpur Chakar</option>
                                    <option value="Shikarpaur">Shikarpaur</option>
                                    <option value="Sukkur">Sukkur</option>
                                    <option value="Tangwani">Tangwani</option>
                                    <option value="Tando Adam Khan">Tando Adam Khan</option>
                                    <option value="Tando Allahyar">Tando Allahyar</option>
                                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                    <option value="Thatta">Thatta</option>
                                    <option value="Umerkot">Umerkot</option>
                                    <option value="Warah">Warah</option>
                                    <!-- <option value="" disabled>Khyber Cities</option> -->
                                    <option value="Abbottabad">Abbottabad</option>
                                    <option value="Adezai">Adezai</option>
                                    <option value="Alpuri">Alpuri</option>
                                    <option value="Akora Khattak">Akora Khattak</option>
                                    <option value="Ayubia">Ayubia</option>
                                    <option value="Banda Daud Shah">Banda Daud Shah</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Batkhela">Batkhela</option>
                                    <option value="Battagram">Battagram</option>
                                    <option value="Birote">Birote</option>
                                    <option value="Chakdara">Chakdara</option>
                                    <option value="Charsadda">Charsadda</option>
                                    <option value="Chitral">Chitral</option>
                                    <option value="Daggar">Daggar</option>
                                    <option value="Dargai">Dargai</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                    <option value="Doaba">Doaba</option>
                                    <option value="Dir">Dir</option>
                                    <option value="Drosh">Drosh</option>
                                    <option value="Hangu">Hangu</option>
                                    <option value="Haripur">Haripur</option>
                                    <option value="Karak">Karak</option>
                                    <option value="Kohat">Kohat</option>
                                    <option value="Kulachi">Kulachi</option>
                                    <option value="Lakki Marwat">Lakki Marwat</option>
                                    <option value="Latamber">Latamber</option>
                                    <option value="Madyan">Madyan</option>
                                    <option value="Mansehra">Mansehra</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Mastuj">Mastuj</option>
                                    <option value="Mingora">Mingora</option>
                                    <option value="Nowshera">Nowshera</option>
                                    <option value="Paharpur">Paharpur</option>
                                    <option value="Pabbi">Pabbi</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Saidu Sharif">Saidu Sharif</option>
                                    <option value="Shorkot">Shorkot</option>
                                    <option value="Shewa Adda">Shewa Adda</option>
                                    <option value="Swabi">Swabi</option>
                                    <option value="Swat">Swat</option>
                                    <option value="Tangi">Tangi</option>
                                    <option value="Tank">Tank</option>
                                    <option value="Thall">Thall</option>
                                    <option value="Timergara">Timergara</option>
                                    <option value="Tordher">Tordher</option>
                                    <!-- <option value="" disabled>Balochistan Cities</option> -->
                                    <option value="Awaran">Awaran</option>
                                    <option value="Barkhan">Barkhan</option>
                                    <option value="Chagai">Chagai</option>
                                    <option value="Dera Bugti">Dera Bugti</option>
                                    <option value="Gwadar">Gwadar</option>
                                    <option value="Harnai">Harnai</option>
                                    <option value="Jafarabad">Jafarabad</option>
                                    <option value="Jhal Magsi">Jhal Magsi</option>
                                    <option value="Kacchi">Kacchi</option>
                                    <option value="Kalat">Kalat</option>
                                    <option value="Kech">Kech</option>
                                    <option value="Kharan">Kharan</option>
                                    <option value="Khuzdar">Khuzdar</option>
                                    <option value="Killa Abdullah">Killa Abdullah</option>
                                    <option value="Killa Saifullah">Killa Saifullah</option>
                                    <option value="Kohlu">Kohlu</option>
                                    <option value="Lasbela">Lasbela</option>
                                    <option value="Lehri">Lehri</option>
                                    <option value="Loralai">Loralai</option>
                                    <option value="Mastung">Mastung</option>
                                    <option value="Musakhel">Musakhel</option>
                                    <option value="Nasirabad">Nasirabad</option>
                                    <option value="Nushki">Nushki</option>
                                    <option value="Panjgur">Panjgur</option>
                                    <option value="Pishin Valley">Pishin Valley</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Sherani">Sherani</option>
                                    <option value="Sibi">Sibi</option>
                                    <option value="Sohbatpur">Sohbatpur</option>
                                    <option value="Washuk">Washuk</option>
                                    <option value="Zhob">Zhob</option>
                                    <option value="Ziarat">Ziarat</option>
                                </select>
            </div>

            <div class="form-group">
              <label for="desc">Note Description</label>
              <select class="form-control search-slt" id="lasttimeEdit" name="lasttimeEdit" placeholder="" >
                            <option><b>Select month </b></option>
                                    <option> 1 Month </option>
                                    <option> 2 Month </option>
                                    <option> 3 Month </option>
                                    <option> 4 Month </option>
                                    <option> 5 Month </option>
                                    <option> 6 Month </option>
                                    <option> 7 Month </option>
                                    <option> 8 Month </option>
                                    <option> 9 Month </option>
                                    <option> 10 Month </option>
                                    <option> 11 Month </option>
                                    <option> 1 Year </option>
                                    <option> More than 1 year </option>

                                </select>
            </div> 
            <div class="form-group">
              <label for="title">Address</label>
              <input type="text" class="form-control" id="addressEdit" name="addressEdit" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

 

  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
 

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">First name</th>
          <th scope="col">Last name</th>
          <th scope="col">Phone No</th>
          <th scope="col">Blood Group</th>
          <th scope="col">Province</th>
          <th scope="col">City</th>
          <th scope="col">Last Time Donate</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $user_id = $_SESSION['user_id'];
          $sql = "SELECT * FROM `donar_info` WHERE `user_id` = '$user_id'";
          $result = mysqli_query($conn, $sql);
          $serialno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $serialno = $serialno + 1;
            echo "<tr>
            <th scope='row'>". $serialno . "</th>
            <td>". $row['firstname'] . "</td>
            <td>". $row['lastname'] . "</td>

            <td>". $row['phone'] . "</td>
            <td>". $row['blood'] . "</td>

            <td>". $row['province'] . "</td>
            <td>". $row['city'] . "</td>

            <td>". $row['lasttime'] . "</td>
            <td>". $row['address'] . "</td>

            <td> <button class='edit btn btn-sm btn-primary' id=".$row['serialno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['serialno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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
  <script>

    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        firstname = tr.getElementsByTagName("td")[0].innerText;
        lastname = tr.getElementsByTagName("td")[1].innerText;

        phonenumber = tr.getElementsByTagName("td")[2].innerText;
        bloodgroup = tr.getElementsByTagName("td")[3].innerText;
        province = tr.getElementsByTagName("td")[4].innerText;
        city = tr.getElementsByTagName("td")[5].innerText;
        lasttime = tr.getElementsByTagName("td")[6].innerText;
        address = tr.getElementsByTagName("td")[7].innerText;

        console.log(firstname , lastname , phonenumber , bloodgroup , province , city , lasttime , address);
        // titleEdit.value = title;
        // descriptionEdit.value = description;

        fnameEdit.value = firstname;
        lnameEdit.value = lastname;
        phoneEdit.value = phonenumber;
        bloodEdit.value = bloodgroup;
        provinceEdit.value = province;
        cityEdit.value =  city;
        lasttimeEdit.value = lasttime;
        addressEdit.value = address;

        serialnoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        serialno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/Mian Blood Bank/home.php?delete=${serialno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>



<?php } require ('footer.php'); ?>