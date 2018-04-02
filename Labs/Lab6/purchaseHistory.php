
 
 
 <?php
    
     $productId = $_GET['productId']; 
 
 
     function getDatabaseConnection($dbName) {

         $host = "localhost";
         $dbname = $dbName;
         $username = "root";
         $password = "";
         
         //checks whether the URL contains "herokuapp" (using Heroku)
         if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
            $host = $url["host"];
            $dbname = substr($url["path"], 1);
            $username = $url["user"];
            $password = $url["pass"];
        }
         
         $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     
     return $dbConn;
     
    }
     
      $conn = getDatabaseConnection("ottermart");

    $productId = $_GET['productId'];

    $sql = "SELECT * FROM `om_product`
            NATURAL JOIN om_purchase 
            WHERE productId = :pId";    
    
    $np = array();
    $np[":pId"] = $productId;
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //print_r($records);
    
    echo $records[0]['productName'] . "<br>";
    echo "<img src='" . $records[0]['productImage'] . "' width='200' /><br/>";
    
    foreach ($records as $record) {
        
        echo "Purchase Date: " . $record["purchaseDate"] . "<br />";
        echo "Unit Price: " . $record["unitPrice"] . "<br />";
        echo "Quantity: " . $record["quantity"] . "<br />";
     
    }
  ?>
 
 <!DOCTYPE html>
 <html>
     <head>
         <title> </title>
     </head>
     <body>
 
     </body>
 </html>