<?php
session_start();
require('config.php');
//$id = $_GET["user_id"];
$uname = $_SESSION['uname'];
//echo "uname from the logged in user is:".$uname;
$select="SELECT course_name,course_descrip, course_fee, application_date,duration,statu FROM users, user_course_application where users.user_id=user_course_application.user_id AND users.uname='$uname'" ;
//echo "mysql query is".$select;
//$select="SELECT course_name,course_descrip, course_fee, enroll_date,duration,statu FROM users, user_course_application where users.user_id=user_course_application.user_id AND users.uname='.$uname.'" ;
$result=mysqli_query($conn,$select);
  $num=mysqli_num_rows($result);   
//echo "number of courses applied by ".$uname. " is ".$num;

$selectMessage="SELECT *FROM users, message where users.uname=message.uname AND users.uname='$uname'" ;
$all_message=$conn->query($selectMessage);

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
    margin-top: -40px;
    border-collapse: collapse;
    width: 100%;
    border-radius:5px 5px 0 0;
    overflow:hidden;
    box-shadow:0 0 28px rgba(0,0,0,0.15);
    
  }

  table th {
    background-color:grey;
    color: white;
    padding: 10px;

  }

  table td {
    padding: 10px;
    color: black;
    font-size: 1em;
    text-align: left;
  
  }
  table td,th{
    padding:12px 15px;
  }

  table tr{
    border-bottom:1px solid #dddddd;
  }
  table tr:nth-of-type(even){
    background:#f3f3f3;
  }
  table tr:last-of-type{
    border-bottom:2px solid grey;
  }
  /* Media screen responsiveness */
  @media screen and (max-width: 768px) {
    table {
      font-size: 0.8em;
      margin-top: 10px;
    }

    table th,
    table td {
      padding: 5px;
    }
    table tr{
    border-bottom:1px solid #dddddd;
  }
  table tr:nth-of-type(even){
    background:#f3f3f3;
  }
  table tr:last-of-type{
    border-bottom:2px solid rgb(171, 171, 245);
  }
  tr[data-href]{
    cursor:pointer;
  }
  tr[data-href]:hover{
    background-color:blue;
    color:white;
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
    border-bottom:1px solid #dddddd;
  }

    table th,
    table td {
      padding: 3px;
    }
    table tr:nth-of-type(even){
    background:#f3f3f3;
  }
  table tr:last-of-type{
    border-bottom:2px solid rgb(171, 171, 245);
  }
  tr[data-href]{
    cursor:pointer;
  }
  tr[data-href]:hover{
    background-color:blue;
    color:white;
  }
  }

  /* Add more media queries for other screen sizes as needed */
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
  #mp{
    color:red;
    font-size:16px;
    
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <li><a href="#mylearning">My learning</a></li>
            <li><a href="contact-login.php">Contact</a></li>
            <li><a href="faq-login.php">FAQs</a></li>
          </li>
          
          <li><a href="msg.php"><i class="bi bi-bell-fill" style="font-size:20px;"></i></span><p
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
    <div class="container">
      <table >
        <tr>
          <th>Course name</th>
          <th>Course description</th>
          <th>Course Duration</th>
          <th>Application Date</th>
          <th>Status</th>
        </tr>
        <tr>
          
        </tr>
        <?php
       
        if($num>0){
          while($data=mysqli_fetch_assoc($result)){
            echo "
            <tr data-href='#'>
            <td>".$data['course_name']."</td>
            <td>".$data['course_descrip']."</td>
            <td>".$data['duration']."</td>
            <td>".$data['application_date']."</td>
            <td>".$data['statu']."</td>
            </tr>
            ";
          }
        }
        else{
          echo "
        <tr data-href='course-login.php'>
          <td colspan='6' class='error-message'>You have not  applied  any course. Please click here to apply.</td>
        </tr>
         ";
        }
        
        ?>
      </table>
    </div>
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
    document.addEventListener('DOMContentLoaded',()=>{
      const rows=document.querySelectorAll('tr[data-href]');
      
      rows.forEach(row=>{
        row.addEventListener('click',()=>{
          window.location.href=row.dataset.href;
        })
      })
    })
  </script>


  <script src="assets/js/main.js"></script>

</body>

</html>