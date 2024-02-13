<?php
session_start();
require('config.php');
//$id = $_GET["user_id"];
$uname = $_SESSION['uname'];

//echo "uname from the logged in user is:".$uname;

//echo "mysql query is".$select;
//$select="SELECT course_name,course_descrip, course_fee, enroll_date,duration,statu FROM users, user_course_application where users.user_id=user_course_application.user_id AND users.uname='.$uname.'" ;
    
//echo "number of courses applied by ".$uname. " is ".$num;
    //echo "ID before IS ".$id;


?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>maw institute</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <style>
    .container {
    max-width: 1500px;
    margin: 100px auto;
    width: 100%;
  }

  table {
    border: 1;
    margin-top: -80px;
    border-collapse: collapse;
    width: 30%;
    margin-left: 20px;
    border-radius:5px 5px 0 0;
    overflow:hidden;
    box-shadow:0 0 28px rgba(0,0,0,0.15);
    
  }

  table th {
    background-color: white;
    color: black;
    padding: 10px;
    

  }

  table td {
    padding: 10px;
    color: black;
    font-size: 1em;
    text-align: left;
   
  }
  table td,th{
    padding:20px 15px;
  }

  table tr{
    border-bottom:1px solid lightblue;
  }
  
  
  /* Media screen responsiveness */
  @media screen and (max-width: 768px) {
    table {
      font-size: 0.8em;
      width: 330px;
      margin-top: -30px;
      margin-left: 2px;
    }
    #messageDescription{
    position:absolute;
    margin-top:100px;
    font-size:13px;
    color:black;
    text-align: left;
    margin-left:40px;
    width:70%;
  }

    table th,
    table td {
      padding: 25px;
      font-size: 16px;
    }
    #ul1{
    margin-left:37px;
    width:200px;
    height:200px;
    margin-top:30px;
    position:absolute;
    background-color:white;
    border:0;
  }
    #mp{
    position: absolute;
    margin-left: 30px;
    font-size: 12px;
  }
    table tr{
    border-bottom:1px solid lightblue;
  }
 
  
  tr[data-href]{
    cursor:pointer;
  }
  tr[data-href]:hover{
    background-color:blue;
    color:white;
  }
  #divnot2{
   position: fixed;
   margin-top: -60px;
   margin-left: 8px;
   width: 330px;
   background-color: white;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  }
  #not{
    text-align:left;
    color:black;
    font-size:20px;
    margin-top:20px;
  }
  #divdisplay{
    position: fixed;
    top:400px;
    max-width:350px;
    max-height: 300px;
    left: -435px;
    display: none;
  }
  #divName{
    max-width:350px;
    height:80px;
    background:lightgrey;
    margin-top:-5px;
    border-bottom:1px solid grey;
  }
 
  #divName #messageName{
    position:absolute;
    margin-top:-40px;
    font-size: 17px;
    color:black;
    margin-left:40px;
    width: 70%;
    text-align: left;
  }
  #divName #arrow{
   width: 20px;
   margin-top: 30px;
   margin-left: 10px;
   
 }
  
  }
 
  @media screen and (max-width: 480px) {
    .container {
      margin: 40px auto;
    }
   
    table {
      font-size: 0.5em;
      
    }
   
    table tr{
    border-bottom:1px solid lightblue;
  }

    table th,
    table td {
      padding: 7px;
    }
 
  
  tr[data-href]{
    cursor:pointer;
  }
  tr[data-href]:hover{
    background-color:red;
    color:white;
  }
 
  
  }
  .error-message {
      text-align: center;
      font-size:23px;
      background-color:white;
      color:black;
  }
  tr[data-href]{
    cursor:pointer;
  }
  tr[data-href]:hover{
    background-color:#f85a40;
    color:white;
  }
 
  #not{
    text-align:center;
    color:black;
    font-size:20px;
    margin-top:20px;
  }
  #mp{
    color:red;
    font-size:16px;
    
  }
  tr:hover {
    background-color: red; /* Change this to the desired hover color */
  }
  #divdisplay{
    position: fixed;
    margin-top:-280px;
    background-color:white;
    width:1000px;
    height:auto;
    margin-left: 440px;
   
  }
  #divName{
    position:absolute;
    width:1000px;
    height:80px;
    background:lightgrey;
    margin-top:2px;
    border-bottom:1px solid grey;
  }

 
  #messageName{
    position:absolute;
    margin-top:20px;
    font-size: 18px;
    color:black;
    margin-left:80px;
    
  }
  .active-row {
    background-color: lightblue; 
    
  }
  #ul1{
    margin-left:-70px;
    width:200px;
    margin-top:20px;
    position:absolute;
    
  }
  #messageDescription{
    position:absolute;
    margin-top:100px;
    font-size:15px;
    color:black;
    text-align: left;
    margin-left:40px;
    width:70%;
  }
   </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

  <!-- ======= Header =======
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@mawinstitute.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254715744358</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>-->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Maw Institute <br>
          <span style="font-size:12px;color:#f85a40;margin-left:-5px;">Of Digital Engineering</span>
        </h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="#"><span>Our courses</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="course-login.php">All Courses</a></li>
              <li><a href="mobileAppCourses.php">Mobile app development courses</a></li>
              <li><a href="webApplicationCourses.php">Web Application develoment courses</a></li>
              <li><a href="databaseCourses.php">Database programming courses</a></li>
              <li><a href="shortCourses.php"><span>Short Courses</span> </a>
              </li>
              
            </ul>
            <li><a href="mylearning.php">My learning</a></li>
            <li><a href="contact-login.php">Contact</a></li>
            <li><a href="faq-login.php">FAQs</a></li>
          </li>
          <?php
      
          $select_rows = mysqli_query($conn, "SELECT * FROM users, message where users.uname=message.uname AND users.uname='$uname'") or die('query failed');
          $row_count = mysqli_num_rows($select_rows);
          ?>
          
          <li class="dropdown"><a href="#nofication"><i class="bi bi-bell-fill" style="font-size:20px;"></i></span><p
          id="mp"><?php echo $row_count; ?></p></a>
          </li>
          
          <li class="dropdown"><a href="#"><i class="bi bi-person-circle" style="font-size:20px;"></i></span></a>
            <ul id="ul1">
              <li> <a href="#"><i class="bi bi-person-circle" style="font-style:normal;font-size:15px;color:blue;"> LoggedIn as <?php echo $uname ?></i></a></li>
              <li><a href="form2.php"><i class="bi bi-pencil-square" style="font-style:normal;font-size:15px;color:blue;"> Edit profile</i></a></li>
             <li><a href="contact-login.php"><i class="bi bi-question-circle-fill" style="font-style:normal;font-size:15px;color:blue;"> Help</i></a></li>
              <li><a href="logout.php"><i class="bi bi-box-arrow-left" style="font-style:normal;font-size:15px;color:blue;"> Logout</i></a></li>
            </ul>
          </li>
          <!--<li style="color:blue;font-size:20px;font-weight:700;"> <span style="color:black;font-size:17px;">Logged In as </span><?php //echo $uname ?></li> -->
        </ul>
      </nav><!-- .navbar -->
      
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color:black;"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="color:black;"></i>

    </div>
  </header><!-- End Header -->
  
  <!-- End Header -->
  <main id="mylearning">
  
    <section id="nofication">
    <div id="divnot2">
    <h3 id="not">Notifications</h3>
    </div>
    <div class="container">
        <table id="dataTable">
          <?php
          $query="SELECT *FROM users,message WHERE users.uname=message.uname AND users.uname='$uname'";
          $query_run=mysqli_query($conn,$query);
          if(mysqli_num_rows($query_run)>0){
            while($row=mysqli_fetch_assoc($query_run)){
              
              ?>
              <tr onclick="displayMessage(this,'<?php echo $row['messageName']; ?>', '<?php echo $row['messageDescription']; ?>')">
                
                <td><?php echo $row['messageName']; ?></td>
                
              </tr>
              <?php
            }
          }
          else{
            echo "<h5>No notifications</h5>";
          }
          ?>
        </table>
    </div>

    <div id="divdisplay">
    <div id="divName">
    <img src="assets/img/arrow.png" alt="" id="arrow">
      <p id="messageName"></p>
      </div>
      <p id="messageDescription"></p>
    </div>
    </section>
    
  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-5 col-md-12 footer-info">
      <a href="index.html" class="logo d-flex align-items-center">
        <span>Maw Institute</span>
      </a>
      <p >Unlock your software development and software engineering potential at Maw institute.Here, we transform aspiring software engineers and software developers into industry-ready professionals</p>
      <div class="social-links d-flex mt-4">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="termsAndCondition.php">Terms of service</a></li>
        <li><a href="privacy.php">Privacy policy</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <h4>Our Courses</h4>
      <ul>
        <li><a href="indexShortCourses.php">Short Programming Courses</a></li>
        <li><a href="indexWeb.php">Web Development</a></li>
        <li><a href="indexAndroid.php">IOS App Development</a></li>
        <li><a href="indexAndroid.php">Hybrid App Development</a></li>
        <li><a href="indexDatabase.php">Database Programming</a></li>
        <li><a href="indexAndroid.php">Android App Development</a></li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Contact Us</h4>
      <p style="color:silver;">
        Nairobi <br>
        Utali house<br>
        Kenya <br><br>
        <strong>Phone: </strong> +254715744358,+254726586630<br>
        <strong>Email: </strong>info@mawinstitute.com,<br>admission@mawinstitute.com,<br>sales@mawinstitute.com<br>
      </p>

    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Maw</span></strong>. All Rights Reserved
  </div>
 
</div>

</footer><!-- End Footer -->
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
 
  <script>
  function displayMessage(row,messageName, messageDescription) {
    var messageDiv1 = document.getElementById("messageDescription");
    var messageDiv=document.getElementById("messageName");
    var dataTable = document.getElementById("dataTable");
    
    messageDiv.textContent =messageName;
    messageDiv1.textContent =messageDescription;
    var prevActiveRow = document.querySelector('.active-row');
    if (prevActiveRow) {
      prevActiveRow.classList.remove('active-row');
    }
    row.classList.add('active-row');
    if (window.innerWidth <= 768) {
      document.getElementById('dataTable').style.display = 'none';
      document.getElementById('divdisplay').style.display = 'block';
      messageDiv.textContent =messageName;
      messageDiv1.textContent =messageDescription;
      
    }

  }

  document.addEventListener("DOMContentLoaded", function() {
    const arrow = document.getElementById("arrow");
    const divDisplay = document.getElementById("divdisplay");
    const table = document.getElementById("dataTable");

    arrow.addEventListener("click", function() {
      if (window.innerWidth <= 768) {
        divDisplay.style.display = "none"; // Hide the divdisplay
        table.style.display = "table"; // Show the table
      }
    });
  });
</script>






  <script src="assets/js/main.js"></script>

</body>

</html>