<?php
session_start();
include("config.php");
$message=null;
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $Password=$_POST['Password'];
    $Password_hash=password_hash($Password,PASSWORD_DEFAULT);
    $Conf_Password=$_POST['Conf_Password'];
    
    $uppercase = preg_match('@[A-Z]@', $Password);
    $lowercase = preg_match('@[a-z]@', $Password);
    $number    = preg_match('@[0-9]@', $Password);
    //$message ="Passwords must contain An uppercase,Lowercase,A special character a number and it must be equal or greater than 8";
   
    // exist query
    $select_data="Select * from `users` where email='$email'";
    $result=mysqli_query($conn,$select_data);
    $num_rows=mysqli_num_rows($result);
    if($uname=="" or $email=="" or $Password=="" or $Conf_Password==""){
        //echo "<script>alert('Please fill all the fields')</script>";
        $message = "<div class='alert alert-danger'>Please fill all the fields!</div>";
        //echo "<script>window.open('signUp.php','_self')</script>";
        //exit();
    }
    if($num_rows>0){
        //echo "<script>alert('Email already exist')</script>";
        $message = "<div class='alert alert-danger'>Email already exist!</div>";
    }
    // insert operation
    // password and cofirm password condition
    else if($Password!=$Conf_Password){
        //echo $msg;
         //$msg="<div class='alert alert-danger'>hello.</div>";
       //echo "<script>alert('Passwords do not match')</script>";
       $message = "<div class='alert alert-danger'>Passwords do not match!</div>";
    }
    
    elseif(!$uppercase || !$lowercase || !$number || strlen($Password) < 8){
      //$message ="Passwords must contain An uppercase,Lowercase,A special character a number and it must be equal or greater than 8";
      //echo $message; 
      $message = "<div class='alert alert-danger'>Passwords must contain An uppercase,Lowercase,A special character a number and it must be equal or greater than 8</div>";
      
    }
    else{
        $insert_query="insert into `users` (uname,email,password) values ('$uname','$email','$Password_hash')";
        $result=mysqli_query($conn,$insert_query);
        if($result){
            /*$user_id = mysqli_insert_id($conn); // Get the auto-generated ID from the previous query

            //$insert_query = "INSERT INTO `user_course_application` (`user_id`) 
                         VALUES ('$user_id')";
             //$query_run = mysqli_query($conn, $insert_query);*/
             //$messageToUser="Your have successfully registered please proceed to personal information";
             $_SESSION['uname']=$uname;
             //$_SESSION['user_id']=$user_id;
             //$message = "<div class='alert alert-danger'>You have successfully logged in</div>";
             //echo "<script>alert('You have successfully logged in')</script>";
             echo "<script>window.open('DatabaseInfom.php','_self')</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css" />
    <title>loading</title>

    <style>
      .alert {
            padding: 1rem;
            border-radius: 5px;
            color: white;
            margin: 1rem 0;
            font-weight: 500;
            width: 65%;
        }
        .alert-warning {
            background-color: #ff9966;
        }
        .alert-danger {
            background-color: #fc5555;
            font-size: 12px;
            width: 70%;
            text-align: left;
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
  .passicon{
    width:30px;height:30px;
    margin-left:330px;
    margin-top:-40px; 
    cursor:pointer;
  }
  @media (max-width: 768px) {
    .passicon{
    width:30px;height:30px;
    margin-left:260px;
    margin-top:-40px; 
    cursor:pointer;
  }
  }
  </style>
</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
           
            <div class="signin-signup">
                <form action="" method="POST" class="sign-up-form">
                <?php echo $message ?>
                    <h2 class="title">Sign up</h2>
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username" value="<?php if (isset($_POST['submit'])) { echo $uname; } ?>" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" id="password"/>
                        <img src="assets/img/close.png" alt="" class="passicon" id="eyeIcon">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Conf_Password" placeholder="Confirm Password" id="password1"/>
                        <img src="assets/img/close.png" alt="" class="passicon" id="eyeIcon1">
                    </div>
                    <input type="submit" name="submit" class="btn" value="Sign up"  />
                    <!---
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        
                    </div>
-->
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Click sign in to login
                    </p>
                    <a href="indexDatabase.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none;
                    background:white;color:blue;">
                        Sign in
                                                                                </a>
                </div>
                <img src="assets/img/da.png" class="image" alt="" style="width:400px;height:440px;z-index:991;margin-top:50px;"/>
            </div>
        </div>
    </div>
    </div>
    <script>
  let eyeIcon = document.getElementById("eyeIcon");
  let password = document.getElementById("password");
  eyeIcon.onclick = function () {
    if (password.type == "password") {
      password.type = "text";
      eyeIcon.src = "assets/img/open.png";
    } else {
      password.type = "password";
      eyeIcon.src = "assets/img/close.png";
    }
  }

  let eyeIcon1 = document.getElementById("eyeIcon1");
  let password1 = document.getElementById("password1");
  eyeIcon1.onclick = function () {
    if (password1.type == "password") {
      password1.type = "text";
      eyeIcon1.src = "assets/img/open.png";
    } else {
      password1.type = "password";
      eyeIcon1.src = "assets/img/close.png";
    }
  }
</script>
</body>
</html>
