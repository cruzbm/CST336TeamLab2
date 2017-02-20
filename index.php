<?php
$players = array(); //holds values of 1-4 at random indexes in correspondance to picks made in pickPlayer()
$indexP = 0; //used or initial buid of pickPlayer functions, to increment from a wider scope through players[]
$cards = array();//used to store values of cards picked in drawCard()
$indexC = 0; //used to index through array of cards[]

$cardArray = array(); //Need an associative array to track suit and card being drawn


//Initially built print function for displaying cards
function printAllCards(){
    for ($i = 0; $i < 4; $i++)
    {
        for ($j = 1; $j <= 13; $j++){
            echo "<img src='cards/";
            switch ($i)
            {
                case 0:
                    echo "clubs/";
                    break;
                case 1:
                    echo "diamonds/";
                    break;
                case 2:
                    echo "hearts/";
                    break;
                case 3:
                    echo "spades/";
                    break;
            
            }
            echo $j. ".png'></link>";
        }
    }
}

function drawCard(){
    $playerTotal = 0;
    
    $cardString;
    
    while ($playerTotal < 42 && $cardStep < 6){
        $face = rand(0,3);
        $card = rand(1,13);
        echo "<td><img src='cards/";        
        switch ($face)
        {
            case 0:
                $cardString = "clubs/";
                echo "clubs/";
                break;
            case 1:
                $cardString = "diamonds/";
                echo "diamonds/";
                break;
            case 2:
                $cardString = "hearts/";
                echo "hearts/";
                break;
            case 3:
                $cardString = "spades/";
                echo "spades/";
                break;
        }
        $cardString += $card; //String containing suit/cardValue
        $cards[$indexC] = $cardString;
        
        
        
        echo $card . ".png'></link></td>";
        $playerTotal += $card;
        $indexC++;
        $cardStep++;
    }
    echo "<td class = 'end'><h2>" .$playerTotal. "</h2></td>";
    
    
    return $playerTotal;
    
}

function checkPlayers($nameFlag){
    for ($i = 0; $i < $indexP; $i++){
        if ($players[$i] == $nameFlag){
            return true;
        }
    }
    return false;
}

// function printPlayer($player){
//     switch ($player){
//         case 1:
//             echo "cf.png";
//             break;
//         case 2:
//             echo "mario.png";
//             break;
//         case 3:
//             echo "nes.png";
//             break;
//         case 4:
//             echo "pikachu.png";
//     }
// }

function pickPlayer($player){
    
    switch ($player){
        case 1:
            if (!checkPlayers(1)){
                echo "cf.png";
                $players[$indexP] = "cf.png";
                $indexP++;
                break;
            }
            else{
                $player += 1;
                pickPlayer($player);
                break;
            }
        case 2:
            if (!checkPlayers(2)){
                echo "mario.png";
                $players[$indexP] = "mario.png";
                $indexP++;
                break;
            }
            else{
                $player += 1;
                pickPlayer($player);
                break;
            }
        case 3:
            if (!checkPlayers(3)){
                echo "nes.png";
                $players[$indexP] = "nes.png";
                $indexP++;
                break;
            }
            else{
                $player += 1;
                pickPlayer($player);
                break;
            }
        case 4:
            if (!checkPlayers(4)){
                echo "pikachu.png";
                $players[$indexP] = "pikachu.png";
                $indexP++;
                break;
            }
            else{
                $player = 1;
                pickPlayer($player);
                break;
            }
        default:
            $player = 1;
            pickPlayer($player);
            break;
    }
}


?>


<!DOCTYPE html>
<html>
    
    <head>
        
        <title>SilverJack</title>
        <link rel="stylesheet" href="lab3.css"></link>
        <style>
            body{
                margin: 0 auto;
            }
            table{
                margin: 0 auto;
            }
        </style>
        
    </head>
    
    <body>
    
        <h1>SilverJack - Nintendo Edition</h1>
        <?//=printAllCards() Reference for future functions?>
        <table>
            <?php
                $playerPoints = array();
                
                echo "<table>";
                
                echo "<tr>";
                echo "<td>CPU 1</td>";
                echo "<td><img src='players/";
                $p1 = rand(1,4);
                $playerPoints['CPU 1'] = pickPlayer($p1);
                echo "' width='80' />";
                drawCard();
                
                //$first++;
                
                echo "<tr>";
                echo "<td>CPU 2</td>";
                echo "<td><img src='players/";
                $p2 = rand(1,4);
                $playerPoints['CPU 2'] = pickPlayer($p2);
                echo "' width='80' />";
                drawCard();
                echo "</tr>";
                
                //$first++;
                
                echo "<tr>";
                echo "<td>CPU 3</td>";
                echo "<td><img src='players/";
                $p3 = rand(1,4);
                $playerPoints['CPU 3'] = pickPlayer($p3);
                echo "' width='80' />";
                drawCard();
                echo "</tr>";
                
                //$first++;
                
                echo "<tr>";
                echo "<td>CPU 4</td>";
                echo "<td><img src='players/";
                $p4 = rand(1,4);
                $playerPoints['CPU 4'] = pickPlayer($p4);
                echo "' width='80' />";
                drawCard();
                echo "</tr>";
                
                echo "</table>";
                
                echo "<br />";
                echo "<h2>The winner is ";
                echo findWinner($playerPoints[]);  
            ?>
        </table>
        
        
    </body>
</html>