<!DOCTYPE html>
<html>
    <head>
        <style>
             @import url("css/style.css");
        </style>
        <title> Outdoor Clothing Store </title>
         <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        
        <form>
             <h1>  Outdoor Clothing Store  </h1>
            Product: <input type="text" name="objectName" /><br /><br />
            
            Piece: 
                <select name="piece">
                    <option value=""> Select One </option>
        
                </select>
            <br /><br />
            
            Brand: 
                <select name="brand">
                    <option value=""> Select One </option>
                    
                </select>
            <br /><br />
            
            Price:  From <input type="text" name="priceFrom" size="7"/>
                    To   <input type="text" name="priceTo" size="7"/>
                    
            <br /><br />
            
             Order result by:<br />
             
             <input type="radio" name="orderBy" value="price"/> Price 
             
             <br /><br />
             
             <input type="radio" name="orderBy" value="name"/> Name
             
             <br /><br />
             <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="orderBy" value="price" autocomplete="off"> Price
  </label>
  <label class="btn btn-success">
    <input type="radio" name="orderBy"  value="name"  autocomplete="off"> Name
  </label>
</div>
             <br /><br />
             <input type="submit" value="Search" name="searchForm" />
             
        </form>
        
        <br />
        <hr>
        <form>
    
        </form>


    </body>
</html>