<?php
session_start();
require('config.php');
$uname = $_SESSION['uname'];
//echo "username is".$uname;
$sql = "SELECT userId,fullname,phone,day,month,year,gender,country,level,school,grade,laptop,programming FROM user_information,users WHERE users.uname=user_information.uname AND users.uname='$uname'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$userId=$row['userId'];
//print_r("userId is".$userId);
include("config.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $level=$_POST['level'];
    $school=$_POST['school'];
    $grade=$_POST['grade'];
    $laptop=$_POST['laptop'];
    $programming=$_POST['programming'];
    $user_id = $_SESSION['user_id'];
   
    //$uname = $_SESSION['uname'];
   //echo "uname from the logged in user is:".$uname;
    $location="images/";
    $file1=$_FILES["image"]["name"];
    $file_temp1=$_FILES["image"]["tmp_name"];

    $file2=$_FILES["image1"]["name"];
    $file_temp2=$_FILES["image1"]["tmp_name"];
    $data=[$file1,$file2];
    $images=implode('',$data);
    $update_query = "UPDATE `user_information` SET `fullname`='$fullname',`phone`='$phone',`day`='$day',`month`='$month',`year`='$year',`gender`='$gender',`country`='$country',`image`='$images',`level`='$level',`school`='$school',`grade`='$grade',`laptop`='$laptop',`programming`='$programming' WHERE `userId`=$userId";
    $query_run=mysqli_query($conn,$update_query);
    if($query_run){
        move_uploaded_file($file_temp1,$location.$file1);
        move_uploaded_file($file_temp2,$location.$file2);
        echo "<script>alert('update successifully')</script>";
        
    }
    else{
        echo "<script>alert('failled')</script>";
        echo "<script>window.open('editInfom.php','_self')</script>";
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maw Institute</title>
    <link href="style3.css" rel="stylesheet">
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="/"><span 6">Maw Institute</span></a></div>
                    <ul class="progress-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>personal Details 1<br><span>25 seconds to complete</span></p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>personal Datails 2<br><span>25 seconds to complete</span></p>
                        </li>
                        <li class="step">
                            <span>3</span>
                            <p>Academic Details<br><span>25 seconds to complete</span></p>
                        </li>
                    </ul>
                </div>
                <form action="">
                    <div class="form-one form-step  active">
                        <div class="bg-svg"></div>
                        <h2>Personal information 1</h2>
                        <p>Enter your personal information</p>
                        <div>
                            <label>Provide your fullNames</label>
                            <input type="text" name="fullname" value="<?php echo $row['fullname'] ?>" placeholder="douglas Otunga" required>
                        </div>
                        <div>
                            <label>Provide your phone number</label>
                            <input type="tel" name="phone" value="<?php echo $row['phone'] ?>" placeholder="+2547XXXXXXX" required>
                        </div>
                        <div>
                            <label>Provide Your gender</label>
                            <select name="gender" id="gender">
                            <option value="select">Please select</option>
                                <option value="male" <?php if ($row['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if ($row['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                <option value="other" <?php if ($row['gender'] === 'other') echo 'selected'; ?>>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Personal information 2</h2>
                        <div class="birth">
                            <label >Date o Birth</label>
                            <div class="grouping">
                                <input type="text" pattern="[0-9]*" name="day" value="<?php echo $row['day'] ?>" min="0" max="30" placeholder="DD">
                                <input type="text" pattern="[0-9]*" name="month" value="<?php echo $row['month'] ?>" min="0" max="12" placeholder="MM">
                                <input type="text" pattern="[0-9]*" name="year" value="<?php echo $row['year'] ?>" min="0" max="2050" placeholder="YYYY">
                            </div>
                        </div>

                        <div>
                            <label>Upload your National Indentification Card</label>
                            <?php if (!empty($row['image'])) : ?>
                            <p>Previously uploaded: <?php echo basename($row['image']); ?></p>
                            <?php endif; ?>
                            <input type="file" name="image">
                        </div>

                        <div>
                            <label>country</label>
                            <select name="country" id="country">
                                <option value="select">Please select</option>
                                <option value="Algeria" <?php if ($row['country'] === 'Algeria') echo 'selected'; ?>>Algeria</option>
                                <option value="Angola" <?php if ($row['country'] === 'Angola') echo 'selected'; ?>>Angola</option>
                                <option value="Benin" <?php if ($row['country'] === 'Benin') echo 'selected'; ?>>Benin</option>
                                <option value="Botswana" <?php if ($row['country'] === 'Botswana') echo 'selected'; ?>>Botswana</option>
                                <option value="Burkina Faso" <?php if ($row['country'] === 'Burkina Faso') echo 'selected'; ?>>Burkina Faso</option>
                                <option value="Burundi" <?php if ($row['country'] === 'Burundi') echo 'selected'; ?>>Burundi</option>
                                <option value="Cape Verde" <?php if ($row['country'] === 'Cape Verde') echo 'selected'; ?>>Cape Verde</option>
                                <option value="Cameroon" <?php if ($row['country'] === 'Cameroon') echo 'selected'; ?>>Cameroon</option>
                                <option value="Central Africa Republic" <?php if ($row['country'] === 'Central Africa Republic') echo 'selected'; ?>>Central Africa Republic</option>
                                <option value="Chad" <?php if ($row['country'] === 'Chad') echo 'selected'; ?>>Chad</option>
                                <option value="Comoros" <?php if ($row['country'] === 'Comoros') echo 'selected'; ?>>Comoros</option>
                                <option value="Congo DRC" <?php if ($row['country'] === 'Congo DRC') echo 'selected'; ?>>Congo DRC</option>
                                <option value="Congo Republic" <?php if ($row['country'] === 'Congo Republic') echo 'selected'; ?>>Congo Republic</option>
                                <option value="Cote d'Ivoire" <?php if ($row['country'] === "Cote d'Ivoire") echo 'selected'; ?>>Cote d'Ivoire</option>
                                <option value="Djbouti" <?php if ($row['country'] === 'Djbouti') echo 'selected'; ?>>Djbouti</option>
                                <option value="Egypt" <?php if ($row['country'] === 'Egypt') echo 'selected'; ?>>Egypt</option>
                                <option value="Equatorial Guinea" <?php if ($row['country'] === 'Equatorial Guinea') echo 'selected'; ?>>Equatorial Guinea</option>
                                <option value="Eritrea" <?php if ($row['country'] === 'Eritrea') echo 'selected'; ?>>Eritrea</option>
                                <option value="Eswatini" <?php if ($row['country'] === 'Eswatini') echo 'selected'; ?>>Eswatini</option>
                                <option value="Ethiopia" <?php if ($row['country'] === 'Ethiopia') echo 'selected'; ?>>Ethiopia</option>
                                <option value="Gabon" <?php if ($row['country'] === 'Gabon') echo 'selected'; ?>>Gabon</option>
                                <option value="Gambia" <?php if ($row['country'] === 'Gambia') echo 'selected'; ?>>Gambia</option>
                                <option value="Ghana" <?php if ($row['country'] === 'Ghana') echo 'selected'; ?>>Ghana</option>
                                <option value="Guinea" <?php if ($row['country'] === 'Guinea') echo 'selected'; ?>>Guinea</option>
                                <option value="Guinea Bissau" <?php if ($row['country'] === 'Zimbabwe') echo 'selected'; ?>>Guinea Bissau</option>
                                <option value="Kenya" <?php if ($row['country'] === 'Kenya') echo 'selected'; ?>>Kenya</option>
                                <option value="Lesotho" <?php if ($row['country'] === 'Lesotho') echo 'selected'; ?>>Lesotho</option>
                                <option value="Liberia" <?php if ($row['country'] === 'Liberia') echo 'selected'; ?>>Liberia</option>
                                <option value="Libya" <?php if ($row['country'] === 'Libya') echo 'selected'; ?>>Libya</option>
                                <option value="Madagascar" <?php if ($row['country'] === 'Madagascar') echo 'selected'; ?>>Madagascar</option>
                                <option value="Malawi" <?php if ($row['country'] === 'Malawi') echo 'selected'; ?>>Malawi</option>
                                <option value="Mali" <?php if ($row['country'] === 'Mali') echo 'selected'; ?>>Mali</option>
                                <option value="Mauritania" <?php if ($row['country'] === 'Mauritania') echo 'selected'; ?>>Mauritania</option>
                                <option value="Mauritius" <?php if ($row['country'] === 'Mauritius') echo 'selected'; ?>>Mauritius</option>
                                <option value="Morocco" <?php if ($row['country'] === 'Morocco') echo 'selected'; ?>>Morocco</option>
                                <option value="Mozambique" <?php if ($row['country'] === 'Mozambique') echo 'selected'; ?>>Mozambique</option>
                                <option value="Namibia" <?php if ($row['country'] === 'Namibia') echo 'selected'; ?>>Namibia</option>
                                <option value="Niger" <?php if ($row['country'] === 'Niger') echo 'selected'; ?>>Niger</option>
                                <option value="Nigeria" <?php if ($row['country'] === 'Nigeria') echo 'selected'; ?>>Nigeria</option>
                                <option value="Rwanda" <?php if ($row['country'] === 'Rwanda') echo 'selected'; ?>>Rwanda</option>
                                <option value="Sao Tome and Principe" <?php if ($row['country'] === 'Sao Tome and Principe') echo 'selected'; ?>>Sao Tome and Principe</option>
                                <option value="Senegal" <?php if ($row['country'] === 'Senegal') echo 'selected'; ?>>Senegal</option>
                                <option value="Seychelles" <?php if ($row['country'] === 'Seychelles') echo 'selected'; ?>>Seychelles</option>
                                <option value="sierra leone" <?php if ($row['country'] === 'sierra leone') echo 'selected'; ?>>sierra leone</option>
                                <option value="Somalia" <?php if ($row['country'] === 'Somalia') echo 'selected'; ?>>Somalia</option>
                                <option value="South Africa" <?php if ($row['country'] === 'South Africa') echo 'selected'; ?>>South Africa</option>
                                <option value="South Sudan" <?php if ($row['country'] === 'South Sudan') echo 'selected'; ?>>South Sudan</option>
                                <option value="Sudan" <?php if ($row['country'] === 'Sudan') echo 'selected'; ?>>Sudan</option>
                                <option value="Tanzania" <?php if ($row['country'] === 'Tanzania') echo 'selected'; ?>>Tanzania</option>
                                <option value="Togo" <?php if ($row['country'] === 'Togo') echo 'selected'; ?>>Togo</option>
                                <option value="Tunisia" <?php if ($row['country'] === 'Tunisia') echo 'selected'; ?>>Tunisia</option>
                                <option value="Uganda" <?php if ($row['country'] === 'Uganda') echo 'selected'; ?>>Uganda</option>
                                <option value="Zambia" <?php if ($row['country'] === 'Zambia') echo 'selected'; ?>>Zambia</option>
                                <option value="Zimbabwe" <?php if ($row['country'] === 'Zimbabwe') echo 'selected'; ?>>Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                          <h2>Academic</h2>
                            <div>
                            <label>Level of Education</label>
                             <select name="level" id="level">
                                <option value="select">Please select</option>
                                <option value="High school" <?php if ($row['level'] === 'High school') echo 'selected'; ?>>High school</option>
                                <option value="College certficate" <?php if ($row['level'] === 'College certficate') echo 'selected'; ?>>College certficate</option>
                                <option value="Diploma" <?php if ($row['level'] === 'Diploma') echo 'selected'; ?>>Diploma</option>
                                <option value="Higher Diploma" <?php if ($row['level'] === 'Higher Diploma') echo 'selected'; ?>>Higher Diploma</option>
                                <option value="Bachelors Degree" <?php if ($row['level'] === 'Bachelors Degree') echo 'selected'; ?>>Bachelors Degree</option>
                                <option value="Masters Degree" <?php if ($row['level'] === 'Masters Degree') echo 'selected'; ?>>Masters Degree</option>
                                <option value="Doctorate Degree" <?php if ($row['level'] === 'Doctorate Degree') echo 'selected'; ?>>Doctorate Degree</option>
                             </select>
                            </div>
                            <div>
                              <label>School attended</label>
                              <input type="text" name="school" value="<?php echo $row['school'] ?>" placeholder="eg Chuka university" required>
                            </div>
                            <div>
                              <label>Grade attained</label>
                              <input type="text" name="grade" value="<?php echo $row['grade'] ?>" placeholder="Type your grade" required>
                            </div>
                            <div>
                              <label>Upload your Academic Documents</label>
                              <?php if (!empty($row['image'])) : ?>
                              <p>Previously uploaded: <?php echo $row['image']; ?></p>
                              <?php endif; ?>
                              <input type="file" name="image1" <?php echo $row['image']; ?> multiple>
                            </div>
                            <div>
                               <label>Do you own a laptop and has access to the internet?</label>
                               <select name="laptop" id="laptop">
                               <option value="<?php echo $row['laptop'] ?>">Please select</option>
                                <option value="Yes" <?php if ($row['laptop'] === 'Yes') echo 'selected'; ?>>Yes</option>
                                <option value="No" <?php if ($row['laptop'] === 'No') echo 'selected'; ?>>No</option>
                                </select>
                            </div>

                            <div>
                               <label>Do you have a background in programming?</label>
                               <select name="programming" id="programming">
                               <option value="select">Please select</option>
                                <option value="yes" <?php if ($row['programming'] === 'yes') echo 'selected'; ?>>yes</option>
                                <option value="No" <?php if ($row['programming'] === 'No') echo 'selected'; ?>>No</option>
                               </select>
                           </div>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn-prev" disabled>back</button>
                        <button type="button" class="btn-next">next step</button>
                        <input type="submit" name="submit" class="btn-submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    const nextButton = document.querySelector('.btn-next');
    const prevButton = document.querySelector('.btn-prev');
    const steps = document.querySelectorAll('.step');
    const form_steps = document.querySelectorAll('.form-step');
    let active=1;

    nextButton.addEventListener('click',()=>{
            active++;
            if(active >steps.length){
                active = steps.length;
            }
            updateProgress();
        })
        prevButton.addEventListener('click',() =>{
            active--;
            if(active < 1){
                active = 1;
            }
            updateProgress();
        }) 
        const updateProgress =()=>{
            console.log('steps.length =>' + steps.length);
            console.log('active => ' + active);
            //toggle
            steps.forEach((step, i)=>  {
                if(i == (active-1)){
                    step.classList.add('active');
                    form_steps[i].classList.add('active');
                    console.log('i=>'+i);
                }else{
                    step.classList.remove('active');
                    form_steps[i].classList.remove('active');
                }
            });
            if(active === 1){
                prevButton.disabled = true;
                nextButton.disabled = false;
            }else if(active === steps.length){
                prevButton.disabled = false;
                nextButton.disabled = true;
            }else{
                prevButton.disabled = false;
                nextButton.disabled = false;
            }
        }
</script>
</html>