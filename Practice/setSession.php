<?php
    session_start(); // starts or resumes a session
    
    $_SESSION['course'] = "CST 336 Internet Programming";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
    <?=$_SESSION ["course"] ?>
    </body>
</html>