<?php
 session_start();
 require('config.php');
 $uname = $_SESSION['uname'];
 //echo "username is".$uname;
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

    $location="images/";
    $file1=$_FILES["image"]["name"];
    $file_temp1=$_FILES["image"]["tmp_name"];

    $file2=$_FILES["image1"]["name"];
    $file_temp2=$_FILES["image1"]["tmp_name"];
    $data=[$file1,$file2];
    $images=implode('',$data);
    $insert_query="INSERT INTO `user_information` (`uname`,`fullname`,`phone`,`day`,`month`,`year`,`gender`,`country`,`image`,`level`,`school`,`grade`,`laptop`,`programming`) 
    VALUES('$uname','$fullname','$phone','$day','$month','$year','$gender'
    ,'$country','$images','$level','$school','$grade','$laptop','$programming')";
    $query_run=mysqli_query($conn,$insert_query);
    if($query_run){
        move_uploaded_file($file_temp1,$location.$file1);
        move_uploaded_file($file_temp2,$location.$file2);
        echo "<script>window.open('indexDatabase.php','_self')</script>";
        
    }
    else{
        echo "<script>alert('failled')</script>";
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
                    <div class="logo"><a href="/"><span style="font-size: 24px;">Maw Institute</span></a></div>
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-one form-step  active">
                        <div class="bg-svg"></div>
                        <h2>Personal information 1</h2>
                        <p>Enter your personal information</p>
                        <div>
                            <label>Provide your fullNames</label>
                            <input type="text" name="fullname" placeholder="douglas Otunga" required>
                        </div>
                        <div>
                            <label>Provide your phone number</label>
                            <input type="tel" name="phone" placeholder="+2547XXXXXXX" required>
                        </div>
                        <div>
                            <label>Provide Your gender</label>
                            <select name="gender" id="gender">
                                <option value="select">Please select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Personal information 2</h2>
                        <div class="birth">
                            <label >Date o Birth</label>
                            <div class="grouping">
                                <input type="text" pattern="[0-9]*" name="day" value="" min="0" max="30" placeholder="DD">
                                <input type="text" pattern="[0-9]*" name="month" value="" min="0" max="12" placeholder="MM">
                                <input type="text" pattern="[0-9]*" name="year" value="" min="0" max="2050" placeholder="YYYY">
                            </div>
                        </div>

                        <div>
                            <label>Upload your National Indentification Card</label>
                            <input type="file" name="image">
                        </div>

                        <div>
                            <label>country</label>
                            <select name="country" id="country">
                                <option value="select">Please select</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Angola">Angola</option>
                                <option value="Benin">Benin</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Burkina faso">Burkina faso</option>
                                <option value="Burindi">Burindi</option>
                                <option value="Cape verde">Cape verde</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Central Africa Republic">Central Africa Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo DRC">Congo DRC</option>
                                <option value="Congo Republic">Congo Republic</option>
                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                <option value="Djbouti">Djbouti</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Eswatini">Eswatini</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea Bissau">Guinea Bissau</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Mali">Mali</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="sierra leone">sierra leone</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South sudan">South sudan</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Togo">Togo</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
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
                                <option value="High school">High school</option>
                                <option value="College certficate">College certficate</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Higher Diploma">Higher Diploma</option>
                                <option value="Bachelors Degree">Bachelors Degree</option>
                                <option value="Masters Degree">Masters Degree</option>
                                <option value="Doctorate Degree">Doctorate Degree</option>
                             </select>
                            </div>
                            <div>
                              <label>School attended</label>
                              <input type="text" name="school" placeholder="eg Chuka university" required>
                            </div>
                            <div>
                              <label>Grade attained</label>
                              <input type="text" name="grade" placeholder="Type your grade" required>
                            </div>
                            <div>
                              <label>Upload your Academic Documents</label>
                              <input type="file" name="image1" multiple>
                            </div>
                            <div>
                               <label>Do you own a laptop and has access to the internet?</label>
                               <select name="laptop" id="laptop">
                               <option value="select">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                </select>
                            </div>

                            <div>
                               <label>Do you have a background in programming?</label>
                               <select name="programming" id="programming">
                               <option value="select">Please select</option>
                                <option value="yes">yes</option>
                                <option value="No">No</option>
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