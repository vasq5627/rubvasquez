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
    <form action="">
    *Gender: <br />
   
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female <br />
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
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