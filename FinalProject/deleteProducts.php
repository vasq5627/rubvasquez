<?php

 include 'dbConnection.php';
    
 $connection = getDatabaseConnection("theVideoGameStore");
    
 $sql = "DELETE FROM Title WHERE gameId =  " . $_GET['gameId'];
 $statement = $connection->prepare($sql);
 
 header("Location: admin.php");
?>