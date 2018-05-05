<?php
include 'inc/header.php'


?>
 <script>
        
            function validateForm() {
                
                return false;
           
            }
            
        </script>
        
        <script>
            
            $(document).ready( function() {
                
                //EVENTS
                
                
                $("#username").change( function() {
                    
                    //alert( $("#username").val());
                    
                     $.ajax({
    
                        type: "GET",
                        url: "usernameAPI.php",
                        dataType: "json",
                        data: { "username": $("#username").val()},
                        success: function(data,status) {
                            
                            //alert(data);
                           
                            if(!$("#userMsg").empty()) {
                                
                                $("#userMsg").empty();
                            }
                            
                            if(!data) {
                                
                                $("#userMsg").html("<span style='color:green';>Username is available!");
                                
                                
                            }
                            
                            else {
                                
                                $("#userMsg").html("<span style='color:red';>Username is already taken!");
                            }
                            
                        
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                    
                     });//ajax
                    
                });
                
                $("#submit").click( function() {
                    if ($("#password1").val() != $("#password2").val()){
                        
                        alert("Passwords do not match! Please retype.");
                    }
                    
                    
                    
                });
            
            });
        </script>

<body>
    <div>
       <h1> Sign Up Form </h1>
    
        <form onsubmit="">
            <fieldset>
               <legend></legend>
                First Name:  <input id="firstName" type="text"><br> 
                Last Name:   <input id="lastName" type="text"><br> 
                Email:       <input type="text"><br> 
                Phone Number:<input type="text"><br><br>
               
                Desired Username: <input id="username" type="text"> <span id="userMsg" ></span><br>
                
                Password: <input id="password1" type="password"> <br>
                
                Type Password Again: <input id="password2" type="password"> <span id="passwordMsg" style="color:red"></span><br>
                
                <input id="submit" type="submit" value="Sign up!">
            </fieldset>
        </form>
    </div>
    </body>
    <div>
     <footer>
            CST 336. 2018&copy; Vasquez<br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            <small>It is used for academic purposes only.</small>
            <br/>
            <img src="img/csumb-logo.png" alt="csumb logo photo"/>
             <img src="buddy_verified.png" alt="csumb "/>
            <br/>
           
        </footer>
     </div>
</html>