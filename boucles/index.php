<?php

$variable = 0;
$variableOne = 0;
$variableTwo = 46;
$variableThree = 100;
$variableFour = 25;

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Les Boucles</h1>
    <h2>Exercice 1</h2>

    <p>
        <?php
        while ($variable <= 10) {
            echo $variable++ . " ";
        }
        ?>
    </p>

    <h2>Exercice 2</h2>

    <p>
        <?php
        while ($variableOne <= 20) {
            echo $variableOne * $variableTwo . " ";
            $variableOne++;
        }
        ?>
    </p>

    <h2>Exercice 3</h2>

    <p>
        <?php

        while ($variableThree >= 10) {
            echo $variableThree * $variableFour . " ";
            $variableThree--;
        }
        ?>
    </p>

    <h2>Exercice 4</h2>

    <p>
        <?php
        for ($variableFive = 1; $variableFive < 10; $variableFive += $variableFive / 2) {
            echo $variableFive . " ";
        }
        ?>
    </p>

    <h2>Exercice 5</h2>

    <p>
        <?php
        for ($variableSix = 1; $variableSix < 15; $variableSix++) {
            echo $variableSix . "On y arrive presque" . " ";
        }
        ?>
    </p>

    <h2>Exercice 6</h2>

    <p>
        <?php
        for ($variableSeven = 20; $variableSeven >= 0; $variableSeven--) {
            echo $variableSeven . " " . " C'est presque bon" . " ";
        }
        ?>
    </p>

    <h2>Exercice 7</h2>

    <p>
        <?php
        for ($variableEight = 1; $variableEight < 100; $variableEight += 15) {
            echo $variableEight . " " . "On tient le bon bout" . " ";
        }
        ?>
    </p>

    <h2>Exercice 8</h2>

    <p>
        <?php
        for ($variableNine = 200; $variableNine > 0; $variableNine -= 12) {
            echo $variableNine . " " . " Enfin" . " ";
        }
        ?>
    </p>


</body>

</html>