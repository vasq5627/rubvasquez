<?php
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Psychology </title>
        <meta charset="uft-8"/>
    <style>
       @import url("css/styles.css");
    </style>
  </head>
  <body>
    <div id="main">
    <form>
      Highest Degree Obtained:    <br>    <input type="radio"id="item1"  name="degreeChoices" value="High School" >        <label for="item1">High School Diploma</label> <br>    <input type="radio" id="item2"name="degreeChoices"value="College">         <label for="item2">College</label> <br><br>    Sports I like: <br>    <input type="checkbox" id="basket"  name="sports" value="basket">           <label for="basket"> Basketball </label> <br>    <input type="checkbox" id="soccer" name="sports" value="basket">            <label for="soccer"> Soccer </label>    <br/><br/>    <input type="button" value="Submit Data" onclick="displayData()"/>  </form>
    </form>
    </div>
  </body>
</html>