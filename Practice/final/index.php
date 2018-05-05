<?php 
session_start();
include '../../dbConnection.php';
$conn = getDatabaseConnection("final");


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
             @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="divOne">
        <h1>  Admin Login </h1>
       
        <form method="POST" action="loginProcess.php">
            <div class="form-group">
    <label for="username1">Username:</label>
    <input type="text" name="username" class="form-control" id="username1" aria-describedby="Help" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
  </div>
  <br />
  <br />
            <input type="submit" class="btn btn-primary" name="submitForm" value="Login!" />
            
        </form>
       
    </div>
        
    </body>
</html>