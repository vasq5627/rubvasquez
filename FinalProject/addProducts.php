<?php
session_start();
include 'inc/header.php';
include "dbConnection.php";

$conn = getDatabaseConnection("theVideoGameStore");

function getCategories() {
    global $conn;
    
    $sql = "SELECT DISTINCT Genre FROM genre ORDER BY Genre";
    
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record["Genre"] ."'>". $record["Genre"] ." </option>";
    }
}
function getPlatform(){
        global $conn;
        
        $sql = "SELECT DISTINCT Platform FROM platform ORDER BY Platform";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        foreach ($records as $record) {
            
            echo "<option value='".$record["Platform"]."' >" . $record["Platform"] . "</option>";
            
        }
        
    }
    

if (isset($_GET['submitProduct'])) {
    $gameTitle = $_GET['Title'];
    $gameImage = $_GET['Image'];
    $gamePrice = $_GET['price'];
    $id = $_GET[''];
    
    $sql = "INSERT INTO price
            ( `ID`, `Title`, `Price`, `Image`) 
             VALUES ( :ID, :Title, :Image, :price)";
    
    $namedParameters = array();
    $namedParameters[':Title'] = $gameName;
    $namedParameters[':Image'] = $gameImage;
    $namedParameters[':price'] = $gamePrice;
    $namedParameters[':ID'] = $id;
     $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
}
?>

<h1> Add a product</h1>
        <form>
            Product name: <input type="text" name="productName"><br>
            Price: <input type="text" name="price"><br>
            Category: <select name="category">
                <option value="">Select One</option>
                <?php getCategories(); ?>
            </select> <br />
            Platform: <select name="platform">
                <option value="">Select One</option>
                <?php getPlatform(); ?>
            </select>
            Set Image Url: <input type = "text" name = "productImage"><br>
            <input type="submit" class="btn btn-success" name="submitProduct" value="Add Product">
            
        </form>
     