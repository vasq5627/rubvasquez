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
            <h2> Psychology Questionnaire <h2>
            <h3>Percieved Stress Scale </h3>
            <br>
    <form action="confirm.php">
    
   <h4>The questions in this scale ask about your feelings and thoughts. In each case, 
   you will be asked to indicate by circling how often you felt or thought a certain way.</h4>
   <h5>1 = Never     2 = Almost Never	3 = Sometimes	  4 = Fairly Often      5 = Very Often </h5>

        <h4>In the last month, how often have you been upset because of something that happened unexpectedly?</h4>
         Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h4>In the last month, how often have you felt that you were unable to control the important things in your life?</h4>
        Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h4>In the last month, how often have you felt nervous or stressed?</h4>
         Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h4>In the last month, how often have you felt confident about your ability to handle your personal problems?</h4>
         Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h4>In the last month, how often have you felt that things were going your way?</h4>
         Scale (between 1 and 5): <input type="number" name="Number" min="1" max="5">
        <h3></h3>
         <input type="submit" name="submit" value="Submit" oneClick=alert('Processing')>
         <input type="reset">
         <br />
         <br />
    </form>
    </div>
    </body>
     <footer id="last">
            <hr>
            CST336 Internet Programming. 2018 &copy <br />
            <strong> Disclaimer: </strong>
            The information in this website is fictitous. It's used for academic purposes.
            <a href="http://csumb.edu">CSUMB</a>
             <figure>
                <img src="img/Monterey.jpg" alt="School Logo" height="100" width="150" />
            </figure>
        </footer>
</html>