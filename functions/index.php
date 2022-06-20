<?php

$chaine = "Une chaine de caractères.";
$chaineDeux = "Une seconde chaine de caractères.";
$result = $chaine . " " . $chaineDeux;
$firstNumber = 46;
$secondNumber = 35;
$nom = "Toussaint";
$prenom = "Sophie";
$age = 29;
$gender = "femme";
// $nombre1 = 2; 
// $nombre2 = 4;
// $nombre3 = 6; 

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

    <h1>Functions</h1>

    <h2>Exercice 1</h2>

    <?php

    function myfunction()
    {
        return true;
    }

    ?>
    <p> <?= myfunction() ?> - 1 veut dire que c'est bon </p>

    <h2>Exercice2</h2>

    <?php
    function chaine($chaine)
    {
        return $chaine;
    }
    ?>
    <p><?= chaine($chaine) ?></p>

    <h2>Exercice 3</h2>

    <?php
    function chaineDeux($chaine, $chaineDeux)
    {
        return $chaine . " " . $chaineDeux;
    }
    ?>
    <p><?= chaineDeux($chaine, $chaineDeux) ?></p>

    <h2>Exercice 4</h2>

    <?php

    function twoNumber($firstNumber, $secondNumber)
    {
        if ($firstNumber > $secondNumber) {
            return "le premier nombre est sup au second";
        } else if ($firstNumber = $secondNumber) {
            return "le premier nombre est égal au second";
        } else if ($firstNumber < $secondNumber) {
            return "le premier nombre est inférieur au second";
        }
    }
    ?>
    <p><?= twoNumber($firstNumber, $secondNumber) ?></p>

    <h2>Exercice 5</h2>

    <?php

    function exo5($chaine, $firstNumber)
    {
        return $chaine . " " . $firstNumber;
    }

    ?>
    <p><?= exo5($chaine, $firstNumber) ?></p>

    <h2>Exercice 6</h2>

    <?php

    function monAge($nom, $prenom, $age)
    {
        return "Bonjour $nom $prenom, tu as $age ans";
    }

    ?>

    <p><?= monAge($nom, $prenom, $age) ?></p>

    <h2>Exercice 7</h2>

    <?php
    function gender($gender, $age)
    {
        if ($age >= 18 && $gender == "femme") {
            return "vous êtes une femme et vous êtes majeure";
        } else if ($age >= 18 && $gender == "homme") {
            return "vous êtes un homme et vous êtes majeur";
        } else if ($age < 18 && $gender == "femme") {
            return "vous êtes un femme et vous êtes mineure";
        } else if ($age < 18 && $gender == "homme") {
            return "vous êtes un homme et vous êtes mineur";
        }
    }
    ?>
    <p><?= gender("femme", 16) ?></p>

    <h2>Exercice 8</h2>

    <?php 

    function threeNumber ($nombre1 = 2, $nombre2 = 4 , $nombre3 = 6){
        return $nombre1 + $nombre2 + $nombre3 ; 
    }   
    ?>
    
    <p><p><?= threeNumber () ?></p></p>

</body>

</html>