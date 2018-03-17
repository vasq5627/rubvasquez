<?php

$nameError  = $genderError  = $classError = "";
$name = $gender = $classError =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "ERROR = Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameError = "ERROR = Only letters"; 
    }
  }
  if (empty($_POST["gender"])) {
    $genderError = "ERROR = Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if(empty($_POST["year"])){
      $classError = "Error = Year is required";
  } else {
      $class = test_input($_POST["year"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function questions(){
    for($i=0;$i<1;$i++){
         ${"randomQues" . $i } = rand(0,9);
         displayData(${"randomQues" . $i}, $i );
     }
    }
    function displayData($randomQues){
switch($randomQues){
    case 0: $question = "In the last month, how often have you been upset because of something that happened unexpectedly?";
        break;
    case 1: $question = "In the last month, how often have you felt that you were unable to control the important things in your life?";
        break;
    case 2: $question = "In the last month, how often have you felt nervous or stressed?";
        break; 
    case 3: $question = "In the last month, how often have you felt confident about your ability to handle your personal problems?";
        break;
    case 4: $question = "In the last month, how often have you felt that things were going your way?";
        break;
    case 5: $question = "In the last month, how often have you found that you could not cope with all the things that you had to do?";
        break;
    case 6: $question = "In the last month, how often have you been able to control irritations in your life?";
        break;
    case 7: $question = "In the last month, how often have you felt that you were on top of things?";
        break;
    case 8: $question = "In the last month, how often have you been angered because of things that were out of your control?";
        break;
    case 9: $question = "In the last month, how often have you felt difficulties were piling up so high that you could not overcome them?";
        break;
}
 echo $question;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Psychology </title>
        <meta charset="uft-8"/>
          <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
   
        <div id="main">
            <h2> Psychology Questionnaire <h2>
            <h3>Percieved Stress Scale </h3>
            <br>
   <p><span class="error">* required field.</span></p>
<form method="post"  placeholder="Full Name" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameError;?></span>
  <br><br>

        
   *Gender: <br />
   
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female <br />
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error"> <?php echo $genderError;?></span>
  <br><br>
  <br />
  <br />
   <p>Select your year in school</p> 
    <select name="Year in School">
    <option value="Select One" selected>Select One</option>
    <option value="Freshman">Freshman</option>
    <option value="Sophmore">Sophmore</option>
    <option value="Junior">Junior</option>
    <option value="Senior">Senior</option>
  </select>
  <br />
  <br>
 <p> Major and/or Minor</p>
  <input type="checkbox" name="subject" value="Comp"> Computer Science <br>
  <input type="checkbox" name="subject" value="Bio">   Biology <br>
   <input type="checkbox" name="subject" value="Psy"> Psychology <br>
  <input type="checkbox" name="subject" value="Math">   Math <br>
   <input type="checkbox" name="subject" value="Hcomm"> HCOM <br>
  <input type="checkbox" name="subject" value="Envs">   Enviormental Studies <br>
  <br />
  
  <p>What is your GPA?</p>
  <textarea name="message" rows="1" cols="10"></textarea>
  <br>
  <br > 
  
   
   <h4>The questions in this scale ask about your feelings and thoughts. In each case, 
   you will be asked to indicate by circling how often you felt or thought a certain way.</h4>
   <h5>1 = Never     2 = Almost Never	3 = Sometimes	  4 = Fairly Often      5 = Very Often </h5>

        <h4 id="question1" ><?= questions(); ?></h4>
         Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h4 id="question2"><?= questions(); ?></h4>
        Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h4 id="question3"><?= questions(); ?></h4>
         Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h3></h3>
        <br />
        
        <br />

         <input type="submit" name="submit" value="Submit" oneClick=alert('Processing')>
       
         <input type="reset">
         <br />
         <br />
    </form>
  
    </div>
    </body>
     <footer>
            <hr>
            CST336 Internet Programming. 2018 &copy <br />
            <strong> Disclaimer: </strong>
            The information in this website is fictitous. It's used for academic purposes.
            <a href="http://csumb.edu">CSUMB</a>
             <figure>
                <img src="img/Monterey.jpg" alt="School Logo" height="100" width="150" />
            </figure>
        </footer>
</html>