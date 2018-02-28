<?php 

function planners(){
    $plannersCost = array("Bob" => 90 ,"Samantha" => 70, "Peter" => 80, "Carter" => 60); // People to hire
        echo "Total Planners = ";
        echo count($plannersCost);
            echo "<br />";
            
    foreach($plannersCost as $x => $x_value) {
         echo "Name = " . $x . ", Cost Per Hour = $" . $x_value;
         ksort($plannersCost);
             echo "<br>";
            
        } 
    //shuffle($plannersCost);
    //print_r($plannersCost);
echo "<br>";

}

function generate(){
    planners();
    for($i=0; $i<3;$i++){
        ${"randomPieces" . $i } = rand(0,2);
        displayIcon(${"randomPieces"  . $i}, $i );
    } overallCost($randomBill1, $randomBill2, $randomBill3);
}
function displayIcon($randomPieces,$position){
    switch($randomPieces){
        case 0: $icon = "buildingTwo";
        break;
        case 1: $icon = "school";
        break;
        case 2: $icon = "police";
        break;
        case 3: $icon = "house";
        break;
    }
echo "<img id='icon$position' src='img/$icon.png' alt='$icon' title='". ucfirst($icon). "' width='70' >"; 

}

function overallCost($randomBill1,$randomBill2,$randomBill3){
    echo"<div id='output'>";
                if($randomBill1 == $randomBill2 && $randomBill2 == $randomBill3) {
                    switch ($randomBill1){
                        case 0: $totalPoints = 1000;
                        echo "<h1> jackpot!</h1>";
                        break;
                        case 1: $totalPoints = 500;
                        break;
                        case 2:$totalPoints = 250;
                        break;
                        case 3:$totalPoints = 900;
                        break;
                    }
                    echo "<h2> you won $totalPoints points! </h2>";
               }  else  {
                    echo "<h3> Try Again! </h3>";
                } 
                   echo "</div>";
}
 ?>

