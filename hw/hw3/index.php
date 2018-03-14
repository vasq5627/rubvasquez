<?php

$nameErr  = $genderErr  = "";
$name = $gender =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "ERROR = Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "ERROR = Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["gender"])) {
    $genderErr = "ERROR = Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
<form method="post" action="recieve.php"  placeholder="Full Name" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 
<form action="recieve.php">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

        
   *Gender: <br />
   
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female <br />
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error"> <?php echo $genderErr;?></span>
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

         <input type="submit" name="submit" value="next" oneClick=alert('Processing')>
         <input type="reset">
         <br />
         <br />
    </form>
    </form>
    </div>
    </body>
     <footer id="last">
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