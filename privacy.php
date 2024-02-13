
<?php
session_start();
require('config.php');
$uname = $_SESSION['uname'];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>maw institute</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="assets/css/about.css" rel="stylesheet">

  <style>
  #h4 {
    margin-top: 30px;
    margin-left: 20px;
    font-size: 17px;
  }

  #p {
    width: 80%;
    margin-left: 20px;
    font-size: 28px;
  }

  #p1 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #img {
    width: 650px;
    height: 400px;
    margin-left: 50%;
    margin-top: -400px;
  }

  #h14 {
    margin-left: 50%;
    margin-top: 50px;
    font-weight: bold;
  }

  #p2 {
    margin-left: 50%;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #img1 {
    width: 600px;
    height: 400px;
    margin-left: 20px;
    margin-top: -400px;
  }

  #h24 {
    margin-left: 20px;
    margin-top: 70px;
    font-weight: bold;
  }

  #span1 {
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;
  }

  #p3 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #span3 {
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;
  }

  #p4 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #span4 {
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;
  }

  #p5 {
    margin-left: 20px;
    font-size: 18px;
    width: 45%;
    text-align: justify;
  }

  #img5 {
    width: 600px;
    height: 400px;
    margin-left: 50%;
    margin-top: -900px;
  }

  #img6 {
    width: 600px;
    height: 400px;
    margin-left: 50%;
    margin-top: -400px;
  }

  /* Media screen responsiveness */

  @media screen and (max-width: 960px) {
    #img,
    #img1,
    #img5,
    #img6 {
      width: 100%;
      height: auto;
      margin-left: 0;
      margin-top: 0;
    }

    #h14,
    #h24,
    #span1,
    #span3,
    #span4 {
      margin-left: 20px;
      margin-top: 20px;
      font-size:14px;
    }
    #p {
    width: 80%;
    margin-left: 20px;
    font-size: 20px;
  }

    #p1,
    #p2,
    #p3,
    #p4,
    #p5 {
      margin-left: 10px;
      width: 95%;
      font-size:12px;
    }
    
  }
  #btt{
      background: white;
      color: black;
      border-radius: 5px;
      margin-left: 30px;
      border:1px solid blue;
      height: 40px;
      width:130px;
    }
     #img3{
      margin-top:-140px;
      width:180px;
      height:100px;
      margin-left:-90px;
    }
    @media (max-width: 768px) {
    #img3{
      margin-top:-100px;
      width:180px;
      height:90px;
      margin-left:-90px;
    }
    #btt{
      background: white;
      color: black;
      border-radius: 5px;
      margin-left: 0;
      border:1px solid blue;
      height: 30px;
      width:100px;
    }
  }
  #h41{
    position:absolute;
    margin-left:40px;
    margin-top:30px;
    font-size:20px;
  }
  #h31{
    text-align:center;
    margin-top:20px;
    font-size:28px;
    font-family: Garamoid;
    font-weight:bold
  }

  #p41{
    position:absolute;
    margin-left:70px;
    color:grey;
    margin-top:60px;
    font-size:20px; 
    font-family: Garamond;
    width:90%;
    text-align:left;
  }
  #h42{
    position:absolute;
    margin-left:40px;
    margin-top:170px;
    font-size:20px;
    font-family: Garamoid;
  }
  #p42{
    position:absolute;
    margin-left:70px;
    color:grey;
    margin-top:200px;
    font-size:20px; 
    font-family: Garamond;
    width:90%;
    text-align:left;
  }
  #h43{
    position:absolute;
    margin-left:40px;
    margin-top:670px;
    font-size:20px;
    font-family: Garamoid;
  }
  #p43{
    position:absolute;
    margin-left:70px;
    color:grey;
    margin-top:700px;
    font-size:20px; 
    font-family: Garamond;
     width:90%;
     text-align:left;
  }
    @media (max-width: 768px) {
    #h31{
    position:absolute;
    margin-left:40px;
    margin-top:-50px;
    font-size: 17px;;
  }
  #h41{
    position:absolute;
    margin-left:20px;
    font-size:17px;
    margin-top:-10px;
  }
  #p41{
    position:absolute;
    margin-left:20px;
    color:grey;
    margin-top:10px;
    font-size:12px; 
    font-family: Garamond;
    width:93%;
    text-align:left;
  }
  #h42{
    position:absolute;
    margin-left:20px;
    margin-top:190px;
    font-size:16px;
    
  }
  #p42{
    position:absolute;
    margin-left:20px;
    color:grey;
    margin-top:230px;
    font-size:10px; 
    font-family: Garamoid;
    width:93%;
    text-align:left;
  }
  #h43{
    position:absolute;
    margin-left:20px;
    font-size:17px;
    margin-top:770px;
    font-family: Garamoid;
  }
  #p43{
    position:absolute;
    margin-left:20px;
    color:grey;
    margin-top:790px;
    font-size:12px; 
     width:93%;
     text-align:left;
  }
  }
  #ul{
    margin-left:-120px;
    width:300px;
    height:auto;
    margin-top:10px;
    position:absolute;
    
  }
  @media screen and (max-width: 768px) {
    #ul{
    margin-left:47px;
    width:200px;
    height:90px;
    margin-top:40px;
    position:absolute;
    height:100px;
    border:0;
    background-color:white;
  }
  }
  #ul1{
    margin-left:-70px;
    width:200px;
    margin-top:20px;
    position:absolute;
    
  }
  @media screen and (max-width: 768px) {
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
  }
  #divme{
    width:300px;
    height:50px;
    background-color:white;
    border-bottom:1px solid grey;
    border-top:1px solid grey;
    
  }
  #mp{
    color:red;
    font-size:16px;
    
  }

</style>
</head>

<body>

  <!-- ======= Header ======= -->
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
  </section><!-- End Top Bar -->
  <?php
      
           $select_rows = mysqli_query($conn, "SELECT * FROM users, message where users.uname=message.uname AND users.uname='$uname'") or die('query failed');
           $row_count = mysqli_num_rows($select_rows);

          ?>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Maw Institute <br>
          <span style="font-size:12px;color:#f85a40;margin-left:-5px;">Of Digital Engineering</span>
        </h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
           <li class="dropdown"><a href="#"><span>Courses for You</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="course-login.php">All Courses</a></li>
              <li><a href="mobileAppCourses.php">Mobile app development courses</a></li>
              <li><a href="webApplicationCourses.php">Web Application develoment courses</a></li>
              <li><a href="databasesCourses.php">Database programming courses</a></li>
              <li><a href="shortCourses.php"><span>Short Courses</span> 
                
              </li>
            </ul>
            <li><a href="contact-login.php">Contact</a></li>
            <li><a href="faq-login.php">FAQs</a></li>
          </li>
          
          <li><a href="msg.php?"><i class="bi bi-bell-fill" style="font-size:20px;"></i></span><p
           id="mp"><?php echo $row_count; ?></p></a>
            

          </li>
          <li class="dropdown"><a href="#"><i class="bi bi-person-circle" style="font-size:20px;"></i></span></a>
            <ul id="ul1">
              <li> <a href="#"><i class="bi bi-person-circle" style="font-style:normal;font-size:15px;color:blue;"> LoggedIn as <?php echo $uname ?></i></a></li>
              <li><a href="form2.php"><i class="bi bi-pencil-square" style="font-style:normal;font-size:15px;color:blue;"> Edit profile</i></a></li>
             <li><a href="#contact-login.php"><i class="bi bi-question-circle-fill" style="font-style:normal;font-size:15px;color:blue;"> Help</i></a></li>
              <li><a href="logout.php"><i class="bi bi-box-arrow-left" style="font-style:normal;font-size:15px;color:blue;"> Logout</i></a></li>
            </ul>
          </li>


        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color:black;"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="color:black;"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  

  <main id="more">
    <section style="height:125vh;">
    <h3 id="h31">
        Data privacy policy
    </h3>
    <div >
        <h4  id="h41">
            1. Introduction
     </h4>
        <p id="p41">
        Maw Institute provides access to services and information online in a manner that  respects and protects your privacy.When you use this website you accept the terms of use and data privacy policy
        and if you don't agree toi this may not use this website. 
        Maw institute reserves all the rights to make changes or modify any information
        or layout of the terms of using this website and the website itself anytime and its sole discretion please read the terms carefully.
   </p>


   <h4 id="h42">
        2. Collection, use and disclosure of personal information
    </h4>
    <p id="p42">
        Personal information is information that identifies an individual or anything that relate to an individaul including your name,
        id number, phone number, email etc.
        Maw institute collect personal information throught various ways for example through online, ofline at varous point of collection, from varous public sources and our partners
        when they share with us.
        <br>
        Maw institute and our third party service providors use the collect personal information for the intended use and within the legal boundaries of data usage and management.
        This involves utilization of your personal information to help us fulfill your request, complete your transactions and to help us communicate to you about our services we offer and our operations.
        We will do this activities with your permission or where we have a rightful  interest within the  law. Your information shall be protected from illegal processing by our third party service providers who shall be obligated to 
        follow the guidelines of the data protection act.
        <br>
        Maw institute may disclose your information  to a third party to facilitate services provided to us including services like payment processing, infrastructure, registration etc. 
        By using the Services, you may elect to disclose Personal Information through communication via emails, chat, profile pages, blogs and other services to which you  are able to post information and content (including, without limitation, our  Social Media Pages). Please note that any information you post or disclose  through these services will become public and
         may be available to other users  and the general public. 
        <br>
        Incases of legal matters we may disclose your personal information as part of compliance to applicable laws and regulations,
        to cooperate with public and government authority, law enforcemnt agencies and any other existing laws and regulations.
        <br>
        We may also collect and disclose other informations in a variety of ways including through browsers, your device, systems, cookies or your Ip address etc.
   </p>
   <h4  id="h43">
            3.Contact us
     </h4>
     <p id="p43">
       Maw institute of digital engineering is solely responsible collection, use and disclosure of personal information.If you have any queries contact us on info@mawinstitute.com.
   </p>

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
          <p>Unlock your software development and software engineering potential at Maw institute.Here, we transform aspiring software engineers and software developers into industry-ready professionals</p>
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
          <p>
            Nairobi <br>
            Utali house<br>
            Kenya <br><br>
            <strong>Phone:</strong> +254715744358,+254726586630<br>
            <strong>Email:</strong>info@mawinstitute.com,<br>admission@mawinstitute.com,<br>sales@mawinstitute.com<br>
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
    let subMenu=document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
      
    }
  </script>
  <script src="assets/js/main.js"></script>

</body>

</html>