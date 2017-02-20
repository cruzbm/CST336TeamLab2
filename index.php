<?php
$players[4];
$indexP = 0;
$cards[52];
$indexC = 0;

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
    $cardStep = 0;
    $playerTotal = 0;
    
    while ($playerTotal < 42 && $cardStep < 6){
        $face = rand(0,3);
        $card = rand(1,13);
        echo "<td><img src='cards/";        
        switch ($face)
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
        echo $card . ".png'></link></td>";
        $playerTotal += $card;
        $cardStep++;
    }
    echo "<td class = 'end'><h2>" .$playerTotal. "</h2></td>";
    
    
    return $playerTotal;
    
}

function checkPlayers($name){
    for ($i = 0; $i < $indexP; $i++){
        if ($players[$i] == $name){
            return true;
        }
    }
    return false;
}

function pickPlayer($player){
    switch ($player){
        case 1:
            echo "cf.png";
            $players[$indexP] = "cf.png";
            break;
        case 2:
            echo "mario.png";
            $players[$indexP] = "mario.png";
            break;
        case 3:
            echo "nes.png";
            $players[$indexP] = "nes.png";
            break;
        case 4:
            echo "pikachu.png";
            $players[$indexP] = "pikachu.png";
            break;
    }
}


?>


<!DOCTYPE html>
<html>
    
    <head>
        
        <title>SilverJack</title>
        <link rel="stylesheet" href="lab3.css"></link>
        
    </head>
    
    <body>
    
        <h1>SilverJack - Nintendo Edition</h1>
        <?//=printAllCards() Reference for future functions?>
        <table>
            <?php
                
                echo "<tr>";
                echo "<td><img src='players/";
                $p1 = rand(1,4);
                echo ".png'></img>";
                drawCard();
                
                echo "<tr>";
                drawCard();
                echo "</tr>";
                
                echo "<tr>";
                drawCard();
                echo "</tr>";
                
                echo "<tr>";
                drawCard();
                echo "</tr>";
        
        
            ?>
        </table>
        
        
    </body>
</html>