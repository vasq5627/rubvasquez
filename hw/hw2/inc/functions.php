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
    shuffle($plannersCost);
    print_r($plannersCost);
echo "<br>";

}

function generate(){
    planners();
    for($i=0; $i<3;$i++){
        ${"randomPieces" . $i } = rand(0,1);
        displayIcon(${"randomPieces"  . $i}, $i );
    } overallCost($randomBill1, $randomBill2, $randomBill3);
    echo $names;
}
function displayIcon($randomPieces,$position){
    switch($randomPieces){
        case 0: $icon = "buildingTwo";
        break;
        case 1: $icon = "school";
        break;
    }
echo "<img id='icon$position' src='img/$icon.png' alt='$icon' title='". ucfirst($icon). "' width='70' >"; 

}

function overallCost($randomBill1, $randomBill2, $randomBill3){
    echo"<div id='output'>";
    if ($randomBill1 == $randomBill2 && $randomBill2 == $randomBill3)
    switch ($randomBill1){
        case 0: $totalCost = 2000000;
        echo"<h1> Over Budget </h1>";
        break;
        case 1: $totalCost = 1000000;
        echo "<h1> Ready to Build </h1>";
        break;
        case 2: $totalCost = 50000;
        echo "<h1> Under </h1>";
    }
}

?>

