<?php

session_start();

include 'inc/header.php';
include '../dbConnection.php';

     $conn = getDatabaseConnection("theVideoGameStore");

function displayPlatform(){
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
    function displayGenre(){
        global $conn;
        
        $sql = "SELECT DISTINCT Genre FROM genre ORDER BY Genre";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //print_r($records);
        
        foreach ($records as $record) {
            
            echo "<option value='".$record["Genre"]."' >" . $record["Genre"] . "</option>";
            
        }
        
    }
    function displaySearchResults(){
        global $conn;
        
        if (isset($_GET['searchForm'])) { //checks whether user has submitted the form
            
            echo "<h3>Products Found: </h3>"; 
            
            $namedParameters = array();
            
            $sql = "SELECT * FROM price NATURAL JOIN genre NATURAL JOIN platform WHERE 1";
            
            if (!empty($_GET['gameName'])) { //checks whether user has typed something in the "Product" text box
                 $sql .=  " AND Title LIKE :Title";
                 $namedParameters[":Title"] = "%" . $_GET['gameName'] . "%";
            }
                  
                  
             if (!empty($_GET['gameGenre'])) { //checks whether user has typed something in the "Product" text box
                 $sql .=  " AND Genre = :genre";
                 $namedParameters[":genre"] =  $_GET['gameGenre'];
             }
             
             if (!empty($_GET['platform'])) { //checks whether user has typed something in the "Product" text box
                 $sql .=  " AND Platform = :platform";
                 $namedParameters[":platform"] =  $_GET['platform'];
             }
            
             if (!empty($_GET['priceFrom'])) { //checks whether user has typed something in the "Product" text box
                 $sql .=  " AND price >= :priceFrom";
                 $namedParameters[":priceFrom"] =  $_GET['priceFrom'];
             }
             
             if (!empty($_GET['priceTo'])) { //checks whether user has typed something in the "Product" text box
                 $sql .=  " AND price <= :priceTo";
                 $namedParameters[":priceTo"] =  $_GET['priceTo'];
             }
            
            if(isset($_GET['orderBy'])) {
                
                if($_GET['orderBy'] == "price") {
                    $sql .= " ORDER BY Price";
                }   
                else {
                      $sql .= " ORDER BY Title";
                 } 
               
                 
            }
           
             $stmt = $conn->prepare($sql);
             $stmt->execute($namedParameters);
             $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            echo "<table>";
            
            foreach ($records as $record) {
                $gameID = $record["Id"];
                $gameTitle = $record["Title"];
                $gameGenre = $record["Genre"];
                $gamePlatform = $record['Platform'];
                $gamePrice = $record["Price"];
                $gameImage = $record["Image"];
                
        
                echo "<table class='table table-striped table-dark'>";
                echo "<thead>"; 
                echo "<tr>";
                echo "<td><img src='$gameImage' width='100' height='100'></td>";
                //echo "<td><a href=gameInfo.php?gameID=".$gameID."'>More Info</a></td>";
                echo "<td><h4>$gameTitle</h4></td>";
                echo "<td><h4>$gameGenre</h4></td>";
                echo "<td><h4>$gamePlatform</h4></td>";
                echo "<td><h4>$$gamePrice</h4></td>";
                
                
                echo '<form method="POST">';
                echo "<input type='hidden' name='gameTitle' value='$gameTitle'>";
                echo "<td><button name='addButton' class='btn btn-primary' value='$gameTitle'>Add</button></td>";
                echo "</form>";
                echo "</tr>";
                echo"</form>";
            }
            echo "</table>";
        }
        
    }
    


?>

       <body>
           <br />
           <br />
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://s3.amazonaws.com/csumb-uploads/rBpzgGIgSGCXlcHgNw0M_CSUMB%20Logo%20Black.png" height="350" width="100" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Finsertcoin%2Ffiles%2F2018%2F04%2Ffortnite-season-4-new.jpg" height="350" width="100" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/xlarge/public/field/image/2018/01/pubg%20screen.jpg?itok=oJpxG3Lx" height="350" width="100" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br />
<br />

        <form id="act">
             <h1 class="display-4">Video Game Store</h1>
            Title: <br />
            <input type="text" class="form-control" name="gameName" /><br /><br />
            
           Genre: <br />
                <select name="piece" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="gameGenre">
                    <option value=""> Select One </option>
               <?=displayGenre()?>
                </select>
            <br /><br />
            
            Platform: <br />
                <select class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="platform">
                    <option value=""> Select One </option>
                   <?= displayPlatform() ?>
                </select>
            <br /><br />
            
            Price:  
           <br /> From <br /> <input type="text" class="form-control" name="priceFrom" placeholder="Min" size="20"/> <br />
               To <br />  <input type="text"  class="form-control" name="priceTo" placeholder="Max" size="20"/>

                    
            <br /><br />
            
             Order By:
             <br />
    
             <div class="btn-group-vertical btn-group-toggle" c data-toggle="buttons">
  <label class="btn btn-dark">
    <input type="radio" name="orderBy"  value="price" autocomplete="off"> Prices
  </label>
  <label class="btn btn-success">
    <input type="radio" name="orderBy"  value="name"  autocomplete="off"> Name
  </label>
   <label class="btn btn btn-info">
    <input type="radio" name="orderBy"  value="name"  autocomplete="off"> Reviews
  </label>
  
  
  
  
</div>
             <br /><br />
             <input type="submit" class="btn btn-primary" value="Search" name="searchForm" />
             
        </form>
        
        <br />
        <hr>
       <form id='act'>
           
        <?= displaySearchResults() ?>
      
        </form>


    </body>
</html>