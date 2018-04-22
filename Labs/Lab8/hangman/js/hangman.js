  
            var selectedWord = "";
            var selectedHint = "";
            var board = []; //array
            var remainingGuesses = 6;
            var words = ["snake", "monkey", "bettle", "horse", "dog"];
            var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
            
            
            //console.log(words[0]);
            
            window.onload = startGame();
            //$("#letterBtn").click( function(){ 
              //  alert($("#letterBox").val() ); } );
            //document.getElementById("letterBtn")
            $(".letter").click(function(){
                console.log($(this).attr("id"));
            });
            
            function startGame(){
                pickWord();
                initboard();
                updateBoard();
            }
            
            function pickWord(){
            var randomInt = Math.floor(Math.random() * words.length);
            selectedWord = words[randomInt];
            }
            
            function createLetters(){
                for (var letter of alphabet){
                    $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>"); 
                }
            }
            
            //for (var i=0; i < selectedWord.length; i++){
              //  board.push("_");
            //}
            function initboard(){
            for(var letter in selectedWord){
                board.push("_");
            }
            }
            
          
          function updateBoard(){
            for(var letter of board){
                 document.getElementById("word").innerHTML += letter + " ";
            }
          }
