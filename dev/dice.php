<?php
$dice = [
    [
    'side1'=> 1,
    'side2'=> 2,
    'side3'=> 3,
    'side4'=> 4,
    'side5'=> 5,
    'side6'=> 6,
    ],
    ['side1'=> 1,
    'side2'=> 2,
    'side3'=> 3,
    'side4'=> 4,
    'side5'=> 5,
    'side6'=> 6,
    ],
    ['side1'=> 1,
    'side2'=> 2,
    'side3'=> 3,
    'side4'=> 4,
    'side5'=> 5,
    'side6'=> 6,
    ],
];
$totalSum = 0;
$counter = 1;
$points = 0;
$round =[ 
    [],
    [],
    []
];

for ($i=0; $i < 3; $i++){
    $randomNum = rand(1,6);
    $round[$i + 1] = $randomNum;
    $score = $dice[$i]['side'.$randomNum] ;
    echo"dice number $counter shows: $score <br>";
    $counter++;
    $totalSum = $totalSum + $score;
};

if ( $round[1] === $round[2] && $round[1] === $round[3]){
    echo "You have 3 of a kind!!!Thats 2 points!";
    $points = $points + 2;
}else if ($round[1] == $round[3] -2 && $round[2] == $round[3] -1){
    echo "You have a straight!!! Thats 3 points!";
    $points =$points +3;
}else if ($totalSum < 14){
    echo "You have to low score to gain any points! try again!";
        
}else if ($totalSum >= 14){
    echo "You have a score over 14! Thats 1 points!";
    $points = $points + 1;
}
echo "<br>You got $points points!!!<br>";


//Lägg in datorns resultat och jämför med humans
$totalSumComputer = 0;
$counter = 1;
$pointsComputer = 0;
for ($j=0; $j < 3; $j++){
    $randomNum = rand(1,6);
    $round[$j + 1] = $randomNum;
    $scoreComputer = $dice[$j]['side'.$randomNum] ;
    echo"The computers dice number $counter shows: $scoreComputer <br>";
    $counter++;
    $totalSumComputer = $totalSumComputer + $scoreComputer ;
};
if ( $round[1] === $round[2] && $round[1] === $round[3]){
    echo "computer have 3 of a kind!!!Thats 2 points!";
    $pointsComputer = $pointsComputer + 2;
}else if ($round[1] == $round[3] -2 && $round[2] == $round[3] -1){
    echo "computer have a straight!!! Thats 3 points!";
    $pointsComputer =$pointsComputer +3;
}else if ($totalSum < 14){
    echo "computer have to low score to gain any points!";
        
}else if ($totalSum >= 14){
    echo "computer have a score over 14! Thats 1 points!";
    $pointsComputer = $pointsComputer + 1;
}
echo "<br>The computer got $pointsComputer points!!!";
echo"<br>";
if ($pointsComputer < $points){
    echo "You won over the computer!";
}else if ($points < $pointsComputer){
    echo "the computer won over you! try again!";
}else if ($pointsComputer === $points){
    echo"Its a tie!";
}
echo "Try and roll again!";
?>
<form action="dice.php" method="post">
            Roll:<input type="submit" name="roll"
                        value="roll"/>            
        </form>   
        <?php
        echo $_GET["roll"];
        ?>     

