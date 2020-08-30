<?php
    session_start();
    if($_SESSION["status"] != "ok"){
        header("Location: ./student-login.php");
    }
    unset($_SESSION["status"]);
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Ambey ITI - Student Portal</title>
  <meta name="description" content="Apply into Ambey ITI Today. Apply in one of the Best ITI Colleges in Bihar"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width" initial-scale=1> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../imgs/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/eaa78a3a83.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/forms.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/spanel.css">

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
                        <li><a href="../../Introduction/history.html">History</a></li>
                        <li><a href="../../Introduction/Mission and Objective.html">Mission and Objective</a></li>
                        <li><a href="../../Introduction/Chairman and Members.html">Chairman and Members</a></li>
                        <li><a href="../../Introduction/Managing Society.html">Managing Society</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admission Criteria
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../Admission Criteria/Eligibility.html">Courses & Eligibility</a></li>
                        <li><a href="../../Admission Criteria/Trades Affiliated.html">Trades Affiliated</a></li>
                        <li><a href="../../Admission Criteria/Schemes">Schemes Running</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../Faculty/Teaching Staff.html">Teaching Staff</a></li>
                        <li><a href="../../Faculty/Administrative Staff.html">Administrative Staff</a></li>
                        <li><a href="../../Faculty/Achievement.html">Achievement by Trainees</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Infrastructure
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../Infrastructure/Building.html">Building Workshop</a></li>
                        <li><a href="../../Infrastructure/Electric Power.html">Power Consumption</a></li>
                    </ul>
                  </li>
                  <li><a href="../../Library/library.html">Library</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quality Monitoring
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../Quality Monitoring/attendence.html">Attendence</a></li>
                        <li><a href="../../Quality Monitoring/Progress Card.html">Progress Card</a></li>
                        <li><a href="../../Quality Monitoring/record.html">Record of Trainees</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="./">Placement
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../Placement/session14-16.html">Session 14-16</a></li>
                        <li><a href="../../Placement/session15-17.html">Session 15-17</a></li>
                        <li><a href="../../Placement/session16-18.html">Session 16-18</a></li>
                        <li><a href="../../Placement/session17-19.html">Session 17-19</a></li>
                        <li><a href="../../Placement/session18-20.html">Session 18-20</a></li>
                        <li><a href="../../Placement/session19-21.html">Session 19-21</a></li>
                    </ul>
                  </li>
              </ul>
          </div>
        </nav>
      </div>

      <div class="body-content" id="bodyID">
        <div class="msg">
          <h2>Ambey ITI<br>Student Portal</h2>
          <div class="college-name">
              <h3>Tests and Notes</h3>
          </div>
          <hr>
          <div class="test_header">Electrician</div>
          <ol type="roman">
              <li><a href="./tests/basicele.html" target="_blank">Basic Electricity Test : 1<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
              <li><a href="./tests/basicele2.html" target="_blank">Basic Electronic Test : 1<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
              <li><a href="./tests/eleWorkshop.html" target="_blank">Workshop and Calculation Test<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
                            <li><a href="./tests/electricity2.html" target="_blank">Electrician Theory Test - 2 (03 May 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
                            <li><a href="./tests/electrician3.html" target="_blank">Electrician Theory Test-3 (10 May 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
                            <li><a href="./tests/electrician4.html" target="_blank">Electrician Theory Test-4 (17 May 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
                            <li><a href="./tests/workshop2.html" target="_blank">Workshop Cal & Sc Test-2 (24 May 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
                            <li><a href="./tests/electrical5.html" target="_blank">Electrician Test-5, First Year(07 Jun 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
                            <li><a href="./tests/electrical2y1.html" target="_blank">Electrician Test-1, Second Year(07 Jun 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
                            <li><a href="./tests/electrical6.html" target="_blank">Electrician Theory Test-6 (15 Jun 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
          </ol>
          <div class="test_header">Fitter</div>
          <ol type="roman">
              <li><a href="./tests/basicfitter.html" target="_blank">Fitter Test : 1<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
              <li><a href="./tests/fitterWorkshop.html" target="_blank">Workshop and Calculation Test<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
              <li><a href="./tests/fitter2.html" target="_blank">Fitter Theory Test-2 (03 May 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
              <li><a href="./tests/fitter3.html" target="_blank">Fitter Theory Test -3 (10 May 2020) : 1<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
               <li><a href="./tests/fitter4.html" target="_blank">Fitter Theory Test -4 (17 May 2020) : 1<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
               <li><a href="./tests/workshop2.html" target="_blank">Workshop Cal & Sc Test-2 (24 May 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
               <li><a href="./tests/fitter5.html" target="_blank">Fitter Theory Test-5 (08 Jun 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
               <li><a href="./tests/fitter6.html" target="_blank">Fitter Theory Test-6 (15 Jun 2020) <i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></li>
          </ol>
          
        </div>
    </div>
      <div class="footer" id="footerID">
        <div class = "top">
          <div class="footerHead">Reach Us
            <div class = "contact">
              <div class = "contact_sub location">
                <i class="fas fa-map-marker-alt"></i>
                <div class = "addr">
                  <span class = "foot add">
                    <span class = "line0">Chandawa More </span> <br>
                    <span class = "line1">Ara, Bihar </span>
                  </span>
                </div>
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
								<li><a href = "../../Admission Criteria/Eligibility.html">Admissions</a></li>
								<li><a href = "../../Faculty/Teaching Staff.html">Faculty</a></li>
								<li><a href = "../../Placement/session19-21.html">Placements</a></li>
								<li><a href = "../../Infrastructure/Building.html">Infrastructure</a></li>
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
						<a class="insta redirect" href="https://instagram.com/rana__ig" target=_blank><i class="fab fa-instagram"></i></a>
						<a class="linkedin redirect" href="https://linkedin.com/" target=_blank><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>