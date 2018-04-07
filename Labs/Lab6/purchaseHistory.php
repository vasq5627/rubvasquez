<?php
    
    include '../../dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");
    
    $productId = $_GET['productId'];
       $sql = "SELECT * FROM `om_product`
            NATURAL JOIN om_purchase 
            WHERE productId = :pId";
        $np= array();
        $np[":pId"] = $productId;
            
        $stmt = $conn->prepare($sql);
        $stmt->execute($np);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
        echo $records[0]['productName'] . "<br>";
        echo "<img src='" . $records[0]['productImage'] . "' width='200' /><br/>";
        echo "Purchase Date: " . $record["purchaseDate"] . "<br />";
        echo "Unit Price: " . $record["unitPrice"] . "<br />";
        echo "Quantity: " . $record["quantity"] . "<br />";
        
        }
     
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Purchase History </title>
        <style type="text/css">
             @import url("css/styles.css");
        </style>
    </head>
    <body>
        <br>
        <br>
 <footer>
            CST 336. 2018&copy; Vasquez<br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            <small>It is used for academic purposes only.</small>
            <br/>
            <img src="img/csumb-logo.png" alt="csumb logo photo"/>
            <br/>
            
        </footer>
    </body>
</html>