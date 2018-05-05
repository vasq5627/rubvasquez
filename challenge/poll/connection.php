<?php
    
  
    include '../dbConnection.php';
    
        
      $conn = getDatabaseConnection('challenge');
      
          $id = $_Get['id']; // data passed here
    $sql = "UPDATE tab_name
        SET colm='$id';
      
      $stmt = $conn->prepare($sql);  
      $stmt->execute();
      $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     echo json_encode($record);




?>