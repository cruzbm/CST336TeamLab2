<?php

$cardArray = array(); //Need an associative array to track suit and card being drawn

function displayCards(){
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


?>


<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <link rel="stylesheet" href="lab3.css"></link>
    </head>
    <body>
        <h1>SilverJack - Nintendo Edition</h1>
        <?=displayCards()?>

    </body>
</html>