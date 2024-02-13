<?php
session_start();
require('config.php');
$uname = $_SESSION['uname'];
?>
<?php
require_once "config.php";
$sql="SELECT * FROM career";
$all_job=$conn->query($sql);
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
  <link href="assets/css/career-login.css" rel="stylesheet">
  <style>
 
  #ul{
    margin-left:-120px;
    width:300px;
    height:100px;
    margin-top:30px;
    position:absolute;
  }
  @media screen and (max-width: 768px) {
    #ul{
    margin-left:20px;
    width:320px;
    height:100px;
    margin-top:30px;
   position:absolute;
   border:0;
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
    margin-left:15px;
    width:200px;
    height:100px;
    margin-top:30px;
    position:absolute;
    border:0;
  }
  }
  .container {
      display: flex;
      flex-direction: column;
      
    }
    
    .box {
      width: 400px;
      height: 150px;
      background-color: lightblue;
      margin-bottom: 10px;
      margin-left:50px;
      margin-top:5px;
    }
    #div11{
      position:absolute;
      background-color:white;
      width:550px;
      height:auto;
      margin-left:10px;
      margin-top:-10px;
    }
  .container {
  display: flex;
  flex-direction: column;
}
.box {
  margin-left:-10px;
  width: 580px;
  height: 180px;
  background-color:white;
  margin-bottom: -3px;
}
#a1{
  position:absolute;
  margin-left:210px;
  margin-top:30px;
  font-size:15px;
  font-weight:700;
  color:grey;
  text-decoration:underline;
}
#a1:hover{
  background-color:lightgrey;
}

#div4 {
  position: absolute;
  width: 900px;
  height: 120vh;
  background-color: white;
  margin-left: 170px;
  border-radius: 5px;
}

#h2 {
  margin-left: 70px;
  margin-top: 30px;
  font-size: 28px;
  font-weight: 700;
}

#btn {
  margin-left: 70px;
  width: 100px;
  height: 40px;
  border-radius: 20px;
  background-color: blue;
  border: 0;
  color: white;
  margin-top: 10px;
}

#span {
  margin-left: 70px;
  margin-top: 20px;
}

#p {
  margin-left: 100px;
  margin-top: -25px;
  color: grey;
}

#span1 {
  position: absolute;
  margin-left: 340px;
  margin-top: -30px;
}

#p1 {
  margin-left: 27px;
  margin-top: -25px;
  color: grey;
}

#span2 {
  position: absolute;
  margin-left: 340px;
  margin-top: 15px;
}

#p2 {
  margin-left: 27px;
  margin-top: -25px;
  color: grey;
}

#h3 {
  position: absolute;
  margin-top: 100px;
  margin-left: 50px;
  font-size: 18px;
  font-weight: 700;
  color: grey;
}

#p3 {
  position: absolute;
  margin-top: 150px;
  margin-left: 20px;
  width: 96%;
  
}

#span3 {
  position: absolute;
  margin-top: 340px;
  margin-left: 50px;
  font-size: 18px;
  font-weight: 700;
  color: grey;
}

#div5 {
  position: absolute;
  margin-top: 380px;
  margin-left: 50px;
  font-size: 18px;
  font-weight: 700;
  color: grey;
}

#p4 {
  font-size: 15px;
  color: black;
  margin-bottom: 5px;
}

#span4 {
  position: absolute;
  margin-top: 540px;
  margin-left: 50px;
  font-size: 18px;
  font-weight: 700;
  color: grey;
}

#div6 {
  position: absolute;
  margin-top: 580px;
  margin-left: 50px;
  font-size: 18px;
  font-weight: 700;
  color: grey;
}

#p5 {
  font-size: 15px;
  color: black;
  margin-bottom: 5px;
}

/* Media Queries */

@media screen and (max-width: 1200px) {
  #div4 {
    width: 800px;
    margin-left: 100px;
  }
}

@media screen and (max-width: 992px) {
  #div4 {
    width: 600px;
    margin-left: 50px;
  }
}

@media screen and (max-width: 768px) {
  #div4 {
    width: 750px;
    margin-left: 30px;
  }
}

@media screen and (max-width: 576px) {
  #div4 {
    width: 358px;
    margin-left: 5px;
    margin-right:10px;
  }
  #span{
    margin-left: 35px;
  }
  #span1{
    margin-left: 228px;
  }
  #span2{
    margin-left: 228px;
  }
  #btn {

  margin-left: -20px;
  width: 80px;
  height: 30px;
  border-radius: 20px;
  background-color: blue;
  border: 0;
  color: white;
  margin-top: 10px;
  font-size:13px;
}

  #h2 {
    font-size: 20px;
    margin-left:15px;

  }

  #btn {
    margin-left: 50px;
  }

  #p {
    margin-left: 70px;
  }

  #p1,
  #p2 {
    margin-left: 30px;
  }

  #h3 {
    margin-left: 20px;
    font-size: 16px;
  }

  #p3 {
    margin-left: 10px;
    width:96%;
    font-size:15px;
    display:block;
    text-align:justify;
    margin-right:10px;
  }
  #p4 {
    margin-left:0;
    width:97%;
    text-align:justify;
    font-size:12px;
    color:grey;
    font-style:normal;
  }
  #h8{
    width:65%;
 }

  #span3,
  #div5 {
    margin-left: 20px;

  }

  #span4,
  #div6 {
    margin-left: 20px;
  }

  #p5 {
    margin-left:0;
    width:97%;
    text-align:justify;
    font-size:12px;
    color:grey;
    font-style:normal;
  }
}
#h8{
    width:100%;
    background-color:transparent;
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
  }
  #divme{
    width:300px;
    height:50px;
    background-color:white;
    border-bottom:1px solid grey;
    border-top:1px solid grey;
    
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

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Maw Institute <br>
          <span style="font-size:12px;color:#f85a40;margin-left:20px;">Of Digital Engineering</span>
        </h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="#"><span>Our Courses</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="course-login.php">All Courses</a></li>
              <li><a href="mobileAppCourses.php">Mobile app development courses</a></li>
              <li><a href="webApplicationCourses.php">Web Application develoment courses</a></li>
              <li><a href="databaseCourses.php">Database programming courses</a></li>
              <li><a href="shortCourses.php"><span>Short Courses</span> 
                
              </li>
            </ul>
            <li><a href=" https://9028-102-220-12-50.ngrok-free.app/maw/mylearning.php">My learning</a></li>
            <li><a href=" https://9028-102-220-12-50.ngrok-free.app/maw/contact-login.php">Contact</a></li>
          </li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="https://2a6d-102-220-12-50.ngrok-free.app/maw/about-login.php">About Us</a></li>
              <li><a href="#career">Career</a></li>
             <li><a href="https://2a6d-102-220-12-50.ngrok-free.app/maw/blog-login.php">Blog</a></li>
              <li><a href="https://2a6d-102-220-12-50.ngrok-free.app/maw/faq-login.php">FAQs</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><i class="bi bi-bell-fill" style="font-size:20px;"></i></span><p
          style="color:red;font-size:18px;font-weight:700;">1</p></a>
            <ul id="ul">
              <li>
                <span style="color:black;font-weight:600;margin-left:10px;">Notification.</span>
                <div style="display:flex;flex-direction:column;">
                <div id="divme">
                  <span style="position:absolute;margin-top:5px; font-size:13px;"><i class="bi bi-file-x" style="font-size:20px;
                  color:red;"></i> Hello, Dear <?php echo $uname ?> your course is pending.</span>
                </div>
                </div>
              </li>
              
            </ul>
          </li>
          
          <li class="dropdown"><a href="#"><i class="bi bi-person-circle" style="font-size:20px;"></i></span></a>
            <ul id="ul1">
              <li> <a href="#"><i class="bi bi-person-circle" style="font-style:normal;font-size:15px;color:black;"> <?php echo $uname ?></i></a></li>
              <li><a href="#"><i class="bi bi-pencil-square" style="font-style:normal;font-size:15px;color:black;"> Edit profile</i></a></li>
             <li><a href="#"><i class="bi bi-question-circle-fill" style="font-style:normal;font-size:15px;color:black;"> Help</i></a></li>
              <li><a href="#"><i class="bi bi-box-arrow-left" style="font-style:normal;font-size:15px;color:black;"> Logout</i></a></li>
            </ul>
          </li>
          <!--<li style="color:blue;font-size:20px;font-weight:700;"> <span style="color:black;font-size:17px;">Logged In as </span><?php //echo $uname ?></li>-->
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color:black;"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="color:black;"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

 
    <section id="more"  style="height:130vh;background-color:lightgrey;" >
    <h4 style="margin-top:-50px;font-size:17px;position:absolute;
    margin-left:35px;color:grey;">
      more
      <span style="color:blue;">/<a href="career.php">career</a>/job.</span>
    </h4>
    <?php
     //echo "ID before IS ".$id;
         $jobId = $_GET['id'];
        // echo "ID after IS ".$jobId;
     $sql = "SELECT * FROM career WHERE jobId =$jobId";
     //$sql = "SELECT * FROM career WHERE jobId =2";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    //print_r($row);
    ?>
    <div id="div4">
    <h2 id="h2"><?php echo $row['jobName'] ?></h2>
    <button id="btn">Apply</button>
    <hr id="h8">

    <span id="span"><i class="bi bi-geo-alt-fill" style="font-size:23px;color:grey;"></i>
    <p id="p"><?php echo $row['location'] ?></p>

    <span id="span1"><i class="bi bi-window-fullscreen" style="font-size:23px;color:grey;"></i>
    <p id="p1"><?php echo $row['jobType'] ?></p>
    </span>

    <span id="span2"><i class="bi bi-clock-fill" style="font-size:23px;color:grey;"></i>
    <p id="p2"><?php echo $row['postedDate'] ?></p>
    </span>

    <h3 id="h3">Job description</h3>

<p id="p3">
     <?php echo $row['jobDes'] ?>
    </p>
    <span id="span3">Skills</span>
    <div id="div5">
    <p id="p4"><?php echo $row['skills'] ?></p>
    
</div>
<span id="span4">Education</span>

<div id="div6">
    <p id="p5"><?php echo $row['education'] ?></p>
</div>
    </div>
     </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Maw Institute</span>
          </a>
          <p>Unlock your programming potential at Maw institute.Here, we transform aspiring developers into industry-ready professionals</p>
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
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Courses</h4>
          <ul>
            <li><a href="#">Short Programming Courses</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">IOS App Development</a></li>
            <li><a href="#">Hybrid App Development</a></li>
            <li><a href="#">Database Programming</a></li>
            <li><a href="#">Android App Development</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Nairobi <br>
            Utali house<br>
            Kenya <br><br>
            <strong>Phone:</strong> +254757561782<br>
            <strong>Email:</strong>info@mawinstitute.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Maw</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Daggy and clinto</a>
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
 
  <script src="assets/js/main.js"></script>

</body>

</html>