
<?php  
   $chessboard = [    
    ['', '', '', '', '', '', '', ''],
    ['', '', '', '', '', '', '', ''],
    ['', '', '', '', '', '', '', ''],
    ['', '', '', '', '', '', '', ''],
    ['', '', '', '', '', '', '', ''],
    ['', '', '', '', '', '', '', ''],
    ['', '', '', '', '', '', '', ''],
    ['', '', '', '', '', '', '', ''],
];
$chessboard[0][0] = '♖'; 
$chessboard[0][1] = '♘'; 
$chessboard[0][2] = '♗'; 
$chessboard[0][3] = '♕'; 
$chessboard[0][4] = '♔'; 
$chessboard[0][5] = '♗'; 
$chessboard[0][6] = '♘'; 
$chessboard[0][7] = '♖'; 
$chessboard[7][0] = '♜'; 
$chessboard[7][1] = '♞'; 
$chessboard[7][2] = '♝'; 
$chessboard[7][3] = '♛'; 
$chessboard[7][4] = '♚'; 
$chessboard[7][5] = '♝'; 
$chessboard[7][6] = '♞'; 
$chessboard[7][7] = '♜'; 

for ($col = 0; $col < 8; $col++) {
    $chessboard[1][$col] = '♙'; 
    $chessboard[6][$col] = '♟'; 
}
function displayChessboard($board){    
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
    $numbers = [1,2,3,4,5,6,7,8];
    echo '<table>';
    echo '<tr><th></th>'; 
    for ($x = 0; $x < 8; $x++) {
        echo '<th>' . $letters[$x] . '</th>';         
    }
    echo '</tr>';    

    for ($i = 0;$i < 8; $i++ ){
        echo "<tr>";
        echo '<th>' . (8 - $i) . '</th>';
    
    for ($j = 0; $j < 8;$j++){
        $piece = $board[$i][$j];
        $boardColor = ($i + $j) % 2 == 0 ? 'white':'black';
        $squareID = 'square_' . ($i + 1) . '_' . ($j + 1);
        echo "<td class=\"$boardColor\" id=\"$squareID\">$piece</td>";        
    }
    echo "</tr>";
}}
displayChessboard($chessboard);
?>
        
            