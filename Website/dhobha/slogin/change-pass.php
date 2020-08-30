<?php
$user = $oldPass = $newPass = $email = $success = $otp = $otpVal = "";
$userErr = $oldPassErr = $newPassErr = $emailErr = $otpErr = "";
$server = "localhost";
$username = "u695870211_kbsingh";
$password = "userdb@699";
$dbname = "u695870211_myDB";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["user"])){
        $userErr = "Enter Valid Username";
    }
    else{
        $user = $_POST["user"];
    }
    if(empty($_POST["oldPass"])){
        $oldPassErr = "Enter Valid Old Password";
    }
    else{
        $oldPass = $_POST["oldPass"];
    }
    if(empty($_POST["newPass"])){
        $newPassErr = "Enter Valid New Password";
    }
    else{
        $newPass = $_POST["newPass"];
    }
    if(empty($_POST["email"])){
        $emailErr = "Enter Valid Email";
    }
    else{
        $email = $_POST["email"];
    }
    if(!empty($_POST["user"]) && !empty($_POST["oldPass"]) && !empty($_POST["newPass"]) && !empty($_POST["email"])){
        $conn = new mysqli($server, $username, $password, $dbname);
        if(!$conn){
            $otpErr = $conn->error;
        }
        else{
            $query = "select username, password from users where username='$user' and password='$oldPass'";
            $result = $conn -> query($query);
            
            if($result->num_rows == 0){
               $otpErr = "User Doesn't Exists !!!";
            }
            else{
                $query = "select * from users where username='$user' and password='$oldPass' and email is not NULL";
                $result = $conn -> query($query);
                
                if($result->num_rows == 0){
                    $query = "update users set email='$email' where username='$user' and password='$oldPass'";
                    $conn -> query($query);
                }
                else{
                    $query = "select email from users where username='$user' and password='$oldPass'";
                    $result = $conn -> query($query);
                    $row = $result -> fetch_assoc();
                    $email = $row["email"];
                }
                $otpVal = rand(100000, 999999);
                $header = 'Password Change Request : Ambey ITI';
                $msg = "Password Change Request for Ambey ITI Student Login Portal \nEnter OTP : " . $otpVal . "\nThanks";
                if(mail($email, $header, $msg)){
                    session_start();
                    $_SESSION["status"] = "ok";
                    $_SESSION["user"] = $user;
                    $_SESSION["newPass"] = $newPass;
                    $_SESSION["oldPass"] = $oldPass;
                    $_SESSION["otpVal"] = $otpVal;
                    header("Location: ./otp-verification.php");
                }
                else{
                    $otpErr = "Error Sending OTP!!! Please Try Again Later";
                }
            }
            $result->close();
        }
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Ambey ITI - Change Password</title>
  <meta name="description" content="Ambey Private ITI, Chandawa More, Ara, Bihar is a sure success destination for trainees who want to excel in the present industrial scenario going in the country and worldwide. The Trained Trainees of Saumya Industrial Training Institute are employable and are being employed as these are trained to be industry ready are self-employed and are giving employment to other."/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../imgs/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/eaa78a3a83.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/sub-jscript.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../css/slogin.css">
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  
</head>
<body>
  <div class="body-container">
    <div id="bg-1"></div>
    <div id="bg-2"></div>
    <div id="bg-3"></div>
    <div id="bg-4"></div>
    <div id="bg-5"></div>
    
    <div class="main-body">
      <div class="header">
        <div class="divlogo">
          <img src="../imgs/logo-final.jpg" class="logo" id="logoID">
        </div>
      </div>
      <div class="nav-toggle" id="toggleID" onclick="openNav()">Navigation Menu<span class="caret"></span>
            </div>

      <div class="navigation-body">
        <nav class="navbar navbar-inverse" id="navbarID">
            <div class="container-fluid">
              <ul class="nav navbar-nav">
                  <li class="active-link"><a href="#">Home</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Introduction
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../Introduction/history.html">History</a></li>
                        <li><a href="../Introduction/Mission and Objective.html">Mission and Objective</a></li>
                        <li><a href="../Introduction/Chairman and Members.html">Chairman and Members</a></li>
                        <li><a href="../Introduction/Managing Society.html">Managing Society</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admission Criteria
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../Admission Criteria/Eligibility.html">Courses & Eligibility</a></li>
                        <li><a href="../Admission Criteria/Trades Affiliated.html">Trades Affiliated</a></li>
                        <li><a href="../Admission Criteria/Schemes.html">Schemes Running</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../Faculty/Teaching Staff.html">Teaching Staff</a></li>
                        <li><a href="../Faculty/Administrative Staff.html">Administrative Staff</a></li>
                        <li><a href="../Faculty/Achievement.html">Achievement by Trainees</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Infrastructure
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../Infrastructure/Building.html">Building Workshop</a></li>
                        <li><a href="../Infrastructure/Electric Power.html">Power Consumption</a></li>
                    </ul>
                  </li>
                  <li><a href="../Library/library.html">Library</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quality Monitoring
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../Quality Monitoring/attendence.html">Attendence</a></li>
                        <li><a href="../Quality Monitoring/Progress Card.html">Progress Card</a></li>
                        <li><a href="../Quality Monitoring/record.html">Record of Trainees</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="./">Placement
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../Placement/session14-16.html">Session 14-16</a></li>
                        <li><a href="../Placement/session15-17.html">Session 15-17</a></li>
                        <li><a href="../Placement/session16-18.html">Session 16-18</a></li>
                        <li><a href="../Placement/session17-19.html">Session 17-19</a></li>
                        <li><a href="../Placement/session18-20.html">Session 18-20</a></li>
                        <li><a href="../Placement/session19-21.html">Session 19-21</a></li>
                    </ul>
                  </li>
              </ul>
          </div>
        </nav>
      </div>
      <div id="bodyID" class="body-content">
      <div class="container">  
      <form id="contact" action="" method="POST">
    <h3>Change Password</h3>
    <fieldset>
      <input placeholder="Enter Username" type="text" name="user" tabindex="1" autocomplete="off" value="<?= $user?>">
    </fieldset>
    <span class = "error"><?= $userErr ?></span>
    <fieldset>
      <input placeholder="Enter Old Password" type="text" name="oldPass" tabindex="2" autocomplete="off" value="<?= $oldPass?>">
    </fieldset>
    <span class = "error"><?= $oldPassErr ?></span>
    <fieldset>
      <input placeholder="Enter New Password" type="password" name="newPass" tabindex="3" value="<?= $newPass?>">
    </fieldset>
    <span class = "error"><?= $newPassErr ?></span>
    <fieldset>
      <input placeholder="Enter Your E-mail" type="email" name="email" tabindex="4" value="<?= $email?>">
    </fieldset>
    <span class = "error"><?= $emailErr ?></span>
    <button name="otp-sub" type="submit" id="contact-submit" data-submit="...Sending">Send Otp</button>
    <p class = "success"><?= $otpErr ?></p>
    <p class = "success"><?= $otp ?></p>
    </form>
</div>
</div>


      <div class="footer" id="footerID">
        <div class = "top">
          <div class="footerHead">Reach Us
            <div class = "contact">
              <div class = "contact_sub location">
                <a href="https://goo.gl/maps/UcA2TqqTS1C6ivGw9">
                  <div class = "contact_sub location">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class = "addr">
                    <span class = "foot add">
                      <span class = "line0">Awadhpuri, Chandawa More </span> <br>
                      <span class = "line1">Ara, Bihar </span>
                    </span>
                  </div>
                </div>
                </a>
              </div>

              <div class = "contact_sub phone">
                <i class="fas fa-phone-alt"></i>
                <span class = "foot phone_no">+91 7042550448</span>
              </div>

              <div class = "contact_sub email">
                <i class="far fa-envelope"></i>
                <span class = " foot email_id">ambeyitichandawa@gmail.com</span>
              </div>
            </div>
          </div>
          <div class="footerHead">Quick Links
            <div class = "sublinks">
              <ul type="none">
                <li><a href = "https://www.ncvtmis.gov.in/Pages/ITI/Details/aspx?code=PR10000632">Affiliation</a></li>
                <li><a href = "../Admission Criteria/Eligibility.html">Admissions</a></li>
                <li><a href = "../Faculty/Teaching Staff.html">Faculty</a></li>
                <li><a href = "../Placement/session19-21.html">Placements</a></li>
                <li><a href = "../Infrastructure/Building.html">Infrastructure</a></li>
                <li><a href = "#">Go to Top</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="credits" id="creditsID">
        <div class = "bottom">
          <div class = "bt_info">&copy designed & developed by <span class = "designer"> Aditya Rana</span>
          </div>
          <div class="contact_designer">
            <a class="fb redirect" href="https://www.facebook.com/profile.php?id=100026972448490" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a class="insta redirect" href="http://instagram.com/rana__ig" target=_blank><i class="fab fa-instagram"></i></a>
            <a class="linkedin redirect" href="http://www.linkedin.com" target=_blank><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
