<?php

session_start();
include 'inc/header.php';
include 'dbConnection.php';

if(!isset( $_SESSION['adminName']))
{
  header("Location:loginProcess.php");
}

$conn = getDatabaseConnection("theVideoGameStore");

function getSum(){
    global $conn;
    
    $sql = "SELECT SUM(Price) FROM price";
    
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $records = $stmt -> fetch(PDO::FETCH_ASSOC);
    
    return $records;
}

function getCount(){
    global $conn;
    
    $sql = "SELECT COUNT(Price) FROM price";
    
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $records = $stmt -> fetch(PDO::FETCH_ASSOC);
    
    return $records;
}

function getAverage(){
    global $conn;
    
    $sql = "SELECT AVG(Price) FROM price";
    
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $records = $stmt -> fetch(PDO::FETCH_ASSOC);
    
    return $records;
}

function displayProducts(){
    global $conn;
    $sql = "SELECT * FROM price";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $records = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    
    return $records;
    
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
        <style>
       
     
            form {
                display: inline;
            }
        </style>
        <script>
            
            function confirmDelete() {
                
                return confirm("Are you sure you want to delete it?");
                
            }
            
        </script>
        
    </head>
    <body>


   <div>
        <h1> Admin Main Page </h1>
         <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        <form action="addProducts.php">
            <input type="submit" name="addproduct" class="btn btn-success" value="Add Product"/>
        </form>
        <form action="logout.php">
            <input type="submit" class="btn btn-success" value="Logout"/>
        </form>
        <br />
        <br />
        
<div class="btn-group- btn-group-toggle" c data-toggle="buttons">
  <label class="btn btn-dark ">
    <input type="radio" name="agg"  value="sum" autocomplete="off"> Sum Of All Products Prices <?= getSum(); ?>
  </label>
  <label class="btn btn-success ">
    <input type="radio" name="agg"  value="avg"  autocomplete="off"> Average of All Products Prices
  </label>
   <label class="btn btn btn-info">
    <input type="radio" name="agg"  value="max"  autocomplete="off"> Maximum of All Products Items
  </label>
  
        
        <br /> <br />
        <strong> Products: </strong> <br />
        
         <?php $records=displayProducts();
            foreach($records as $record) {
                 echo "<a  href='updateProduct.php?gameId=".$record['gameId']."'>Update</a>";
               
                
                echo "<form action='deleteProducts.php' onsubmit='return confirmDelete()'>";
                echo "<input type='hidden'  name='gameId' value= " . $record['gameId'] . " />";
                echo "<input type='submit'  value='Remove' >";
                echo "</form>";
                
                echo $record['Title'];
                echo $record['Price'];
                echo '<br>';
            }
        
        ?>
       
        </div>
    </div>

    </body>
</html>