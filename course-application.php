<?php
session_start();
require('config.php');
$uname = $_SESSION['uname'];

$selectMessage="SELECT *FROM users, message where users.uname=message.uname AND users.uname='$uname'" ;
$all_message=$conn->query($selectMessage);
?>
<?php
//include('auth.php');
include("config.php");
if(isset($_POST['submit'])){
  $course_id=$_POST['course_id'];
  $course_name=$_POST['course_name'];
  $course_descrip=$_POST['course_descrip'];
  $course_fee=$_POST['course_fee'];
  $duration=$_POST['duration'];
  //$uname = $_SESSION['uname'];
 
  $user_id = $_SESSION['user_id'];
 
  //check whether this user has previously applied for the current course that they selected inthe previous page
  
  $selectUserCourseApplication = "SELECT *FROM user_course_application WHERE user_id=$user_id AND course_id =$course_id";
  $resultUserCourseApplication = mysqli_query($conn,$selectUserCourseApplication);
  $fetch_dataUserCourseApplication=mysqli_fetch_assoc($resultUserCourseApplication);

  if(!empty($fetch_dataUserCourseApplication)){
  $userCourseApplicationStatus= $fetch_dataUserCourseApplication['statu'];
  $userCourseApplicationStatus = strtolower($userCourseApplicationStatus);
  $messageToUser  = "";
  switch($userCourseApplicationStatus){
       
        case "pending":
        $messageToUser = "Sorry. You recently applied for this course. It is currently under review.
                          You will be notified shortly. Keep checking the application in your Maw online dashboard";
                

        break;
         case'accepted':
         $messageToUser = "Sorry. You recently applied for this course and you were accepted for admission
                           If you are not yet enrolled into the course, please proceed to enroll as soon as possible";
         break;
         default:
      }

  }



  //$user_id=$fetch_data['user_id'];

   

  //echo "Username is".$uname;
// get the user id against the user whose username is $uname
  /*$selectUserId = "SELECT user_id FROM users WHERE uname='$uname'";
  $result = mysqli_query($conn, $selectUserId);
  $fetch_data=mysqli_fetch_assoc($result);
  $user_id=$fetch_data['user_id'];
  */

  //echo "user_id is".$user_id;
  $insert_query="INSERT INTO user_course_application (user_id,course_name,course_descrip,course_fee
  ,duration,course_id) VALUES('$user_id','$course_name','$course_descrip','$course_fee','$duration',$course_id)";
  try{

  $result = mysqli_query($conn, $insert_query);
  if($result){
    $course_application_id = mysqli_insert_id($conn); 
    
    header("Location: courseapply.php");
      
  }
  else{
      echo "<script>alert('failled')</script>";
  }
}catch(Exception $e){
  //echo "the error was".$e->getMessage();
  //echo "The error code was".$e->getCode();
  $errorCode=$e->getCode();
  if($errorCode==1062){

    //echo "You already have applied for this course please choose another one";
    echo "<script>alert('You already have applied for this course please choose another one')</script>";
    echo "<script>window.open('course-login.php','_self')</script>";
  }
}
  /*if (mysqli_errno() == 1062) {
    echo "You have previously applied for this course and the status is still pending!";
  }*/
}
?>


<?php
include "config.php";
//print_r ($_GET);
//print_r($_SESSION);
//$user_id = $_SESSION["user_id"];
//$id = $_GET['user_id'];
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
  <link href="assets/css/course-applicating2.css" rel="stylesheet">
  <style>
  /* Default styles */

  #h2 {
    margin-left: 50px;
  }

  #input {
    margin-top: -30px;
    position: absolute;
    width: 20px;
    background: rgb(225, 230, 233);
    border: rgb(225, 230, 233);
    color: rgb(225, 230, 233);
  }

  #input1 {
    width: 600px;
    text-align: left;
    height: 70px;
    font-size: 25px;
    font-weight: bold;
    border: none;
    background-color: rgb(225, 230, 233);
  }

  #span {
    margin-left: 40px;
    margin-top: 20px;
  }

  #input3 {
    width: 350px;
    text-align: left;
    border: none;
    background-color: rgb(225, 230, 233);
    font-size: 18px;
  }

  #p {
    margin-left: 40px;
    margin-top: 15px;
    font-size: 18px;
    width: 650px;
  }

  #btn {
    margin-left: 100px;
    margin-top: 50px;
    width: 140px;
    height: 70px;
    border: 0;
    border-radius: 7px;
    background: blue;
    color: white;
  }

  #div1 {
    width: 420px;
    height: 350px;
    background: white;
    margin-left: 810px;
    margin-top: -360px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    
  }

  #h4 {
    margin-top: 25px;
    position: absolute;
    font-size: 20px;
    font-weight: bold;
    margin-left: 20px;
  }

  #p1 {
    width: 370px;
    position: absolute;
    margin-top: 60px;
    margin-left: 20px;
    font-size: 14px;
    color: grey;
  }

  #span1 {
    background: lightgrey;
    width: 420px;
    height: 2px;
    position: absolute;
    margin-top: 120px;
  }

  #span2 {
    position: absolute;
    margin-top: 150px;
    margin-left: 20px;
    font-size: 17px;
  }

  #span3 {
    position: absolute;
    margin-top: 180px;
    margin-left: 20px;
    font-size: 18px;
    font-weight: bold;
  }

  #input4 {
    background: white;
    border: none;
    font-weight: bold;
    font-size: 18px;
  }

  #span4 {
    position: absolute;
    margin-top: 150px;
    margin-left: 220px;
    font-size: 17px;
  }

  #span5 {
    position: absolute;
    margin-top: 270px;
    margin-left: 20px;
    font-size: 18px;
    font-weight: bold;
  }

  #input5 {
    background: white;
    border: none;
    font-weight: bold;
    font-size: 18px;
    margin-left: 200px;
    margin-top: -90px;
    width: 100px;
  }

  #span6 {
    position: absolute;
    margin-top: 300px;
    margin-left: 150px;
    font-style: italic;
  }
  #message {
    margin-left:300px;
    margin-top:-400px;
    position:fixed;
    background:whitesmoke;
    width:800px;
   display:none;
    height:300px; 
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);

    
  }
  #btn1{
    width:100px;
    height:40px;
    background:blue;
    position:absolute;
    margin-left:380px;
    margin-top:230px;
    border:0;
    color:white;
  }
  #pm{
    position:absolute;
    margin-top:100px;
    width:97%;
    text-align:justify;
    margin-left:10px;
    margin-right:10px;
  }

  /* Media Queries */

  @media (max-width: 768px) {
    /* Adjustments for smaller screens */
    #div1 {
      width: 100%;
      margin-left: 0;
      margin-top: 0;
      height: 300px;
    }

    #h2 {
      margin-left: 20px;
    }

    #h4,
    #p1,
    #span1,
    #span2,
    #span3,
    #input4,
    #span4,
    #span5,
    #input5,
    #span6 {
      position: relative;
      margin-left: 1;
      
    }

    #message {
      margin-left: 0;
      margin-top: 0;
      width: 100%;
      height: auto;
      display:none;
    }

    #btn1 {
      margin-left: 20px;
      margin-top: 10px;
      
    }

    #pm {
      margin-left: 10px;
      margin-right: 10px;
      
      
    }
    #btn {
    margin-left: 30px;
    margin-top: 20px;
    width: 100px;
    height: 50px;
    border: 0;
    border-radius: 7px;
    background: blue;
    color: white;
  }
  #a1{
    color:blue;
    position: absolute;
    margin-top:40px;
    width:100px;
    margin-left:-150px;
  }
  #input1 {
      width: 100%;
      font-size:10px;
      color:black;
      margin-left: -10px;
    }

    #input3 {
      width: 90%;
      color:black;
      font-size: 14px;
      margin-left: -30px;
    }

    #p {
      width: 90%;
      font-size: 14px;
      margin-left: 10px;
      color: black;
      
    }
  }

  @media (max-width: 480px) {
    /* Adjustments for even smaller screens */
    #input1 {
      width: 100%;
      font-size:10px;
      color:black;
      margin-left: -10px;
    }

    #input3 {
      width: 90%;
      color:black;
      font-size: 14px;
      margin-left: -30px;
    }

    #p {
      width: 90%;
      font-size: 14px;
      margin-left: 10px;
      color: black;
      
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
    font-size: 14px;
    font-weight: 0;
  }
  }
  #a1{
    color:blue;
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
    font-size:18px;
    font-weight:700;
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
      <a href="main.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Maw Institute <br>
          <span style="font-size:12px;color:#f85a40;margin-left:20px;">Of Digital Engineering</span>
        </h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="#"><span>Courses for You</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="course-login.php">All Courses</a></li>
              <li><a href="mobileAppCourses.php">Mobile app development courses</a></li>
              <li><a href="webApplicationCourses.php">Web Application develoment courses</a></li>
              <li><a href="databaseCourses.php">Database programming courses</a></li>
              <li><a href="shortCourses.php">Short Courses </a></li>
            </ul>
          </li>
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
          <!---<li style="color:blue;font-size:20px;font-weight:700;"> <span style="color:black;font-size:17px;">Logged In as </span><?php //echo $uname ?></li>-->
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color:black;"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="color:black;"></i>
    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  <main id="courses">
  <?php
     //echo "ID before IS ".$id;
         $course_id = $_GET['id'];
        // echo "ID after IS ".$course_id;
     $sql = "SELECT * FROM course WHERE course_id =$course_id";
     //$sql = "SELECT * FROM course WHERE course_id =2";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    //print_r($row);
    ?>
    <section style="background-color: rgb(225, 230, 233);height:auto;">
    <h2 id="h2">
    <form action="" method="post">
    <input type="text" name="course_id" value="<?php echo $row['course_id'] ?>"
    id="input">
    <input type="text" name="course_name" value="<?php echo $row['course_name'] ?>" id="input1">
    </h2>
    <span id="span">
      <input type="text" name="course_descrip" value="<?php echo $row['course_descrip'] ?>"
      id="input3">
    </span>
    <p id="p">
    <?php 
        if(!(is_null($row))){
    echo $row['moreinfo'] ;
        }
        else{
          echo "We are sorry. We are experiencing internal system issue.
           Please contact us on 0722222";

        }
    ?>
    </p>
    <button type="submit" id="btn"name="submit" >Apply</button>
    
    <div id="div1">
    <h4 id="h4">Professional certficate of completion <br>
    </h4>
    <p id="p1">You will be issued with a certficate of completion at the end of the training
    </p>
    <span id="span1"></span>

    <span id="span2">Course Fee:</span>
    <span id="span3">
    <input type="text" name="course_fee" value="<?php echo $row['course_fee'] ?>"
    id="input4">
    </span>

    <span id="span4">Duration:</span>
     <span id="span5">
    <input type="text" name="duration" value="<?php echo $row['duration'] ?>"
    id="input5">
    </span>
   </form>
    <span id="span6">
      <a href="course-login.php" id="a1">View courses</a>
    </span>
    </div>
   <!--- <div id="message">
      <p id="pm"> 
        <?php
        echo $messageToUser;
        ?>
      </p>
      <button id="btn1">Ok</button>
    </div>--->
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
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
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
  


  <script src="assets/js/main.js"></script>

</body>

</html>