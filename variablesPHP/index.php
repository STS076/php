<?php
$name = "Sosso";
$lastname = "Toussaint";
$firstname = "Sophie";
$age = 29;
$km = 125;
$mots = "un mot";
$chiffre = 2;
$avecVirgule = 2.5;
$vraiOuFaux = true;
$firstOperation = 3 + 4;
$secondOperation = 5 * 20;
$thirdOperation = 45 / 5;
$isEasy = false;
$myAge = 9;
$gender = "femme";
$magnitude = 15;
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

    <?php
    echo "<h1>Hello world</h1>"
    // echo veut dire écrire 
    ?>

    <h2> Exercice 1 </h2>
    <p>
        <?php echo "je m'appelle  $name" ?>
    </p>


    <h2>Exercice 2 </h2>
    <p>
        <?php echo "je m'appelle  $firstname $lastname  et j'ai  $age  ans" ?>
    </p>

    <h2>Exercice 3 </h2>
    <p>
        <?php echo "$km km" ?>
    </p>

    <h2>Exercice 4</h2>
    <p>
        <?php echo $mots ?>
        <?php echo $chiffre ?>
        <?php echo $avecVirgule ?>
        <?php echo $vraiOuFaux ?>
        <?php
        var_dump($mots);
        ?>

    </p>

    <h2>Exercice 6 et 7</h2>
    <p>
        <?php echo "Bonjour " .  $firstname . " comment vas tu ?" ?>
        <?= "Bonjour $firstname $lastname tu as $age ans" ?>
        <!-- echo court -->
    </p>

    <h2>Exercice 8</h2>
    <p>
        <?= "3+4 = $firstOperation | 5x20 = $secondOperation | 45/5 = $thirdOperation"  ?>
    <p><?= 3 + 4 ?></p>
    </p>

    <h2>Conditions</h2>
    <h3>Exercice 1</h3>
    <p>
        <?php
        if ($myAge >= 18) {
            echo "vous êtes majeur";
        } else {
            echo "vous êtes mineur";
        }
        ?>
    </p>

    <h3>Exercice 2</h3>
    <p>
        <?php
        if ($isEasy == true) {
            echo "c'est facile";
        } else {
            echo "c'est difficile";
        }
        ?>

    <p>
        <!-- ternaire -->
        <?= $isEasy == true ? "c'est facile" : "c'est difficile" ?>
    </p>
    </p>

    <h3>Exercice 3</h3>
    <p>
        <?php
        if ($myAge >= 18 && $gender == "femme") {
            echo "vous êtes une femme et vous êtes majeure";
        } else if ($myAge >= 18 && $gender == "homme") {
            echo "vous êtes un homme et vous êtes majeur";
        } else if ($myAge < 18 && $gender == "femme") {
            echo "vous êtes un femme et vous êtes mineure";
        } else if ($myAge < 18 && $gender == "homme") {
            echo "vous êtes un homme et vous êtes mineur";
        }
        ?>
    </p>

    <h3>Exercice 4</h3>
    <p>
        <?php
        switch ($magnitude) {
            case 1:
                echo "Micro-séisme impossible à ressentir";
                break;
            case 2:
                echo "Micro-séisme impossible à ressentir mais enregistrable par les sismographes";
                break;
            case 3:
                echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti";
                break;
            case 4:
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
                break;
            case 5:
                echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                break;
            case 6:
                echo "Fort séisme capable d'engendrer de destructions majeures sur une large distance (180km) autour de l'épicentre";
                break;
            case 7:
                echo "Séisme capable de destruction majeures à modérées sur une très large zone en fonction de la distance";
                break;
            case 8:
                echo "Séisme capable de destruction majeures sur une très large zone de plusieurs kilomètres";
                break;
            case 9:
                echo "Séisme capable de tout détruire sur une très vaste zone";
                break;
            default:
                echo "Ne correspond à aucune valeur sur l'échelle";
        }

        ?>
    </p>

    <h3>Exercice 5</h3>
    <p>
        <?php
        if ($gender == "homme") {
            echo "c'est une dévloppeur";
        } else {
            echo  "c'est une développeuse";
        }

        ?>
    </p>

    <h3>Exercice 6</h3>

    <p>
        <?php
        if ($age >= 18) {
            echo "tu es majeur";
        } else {
            echo "tu n'es pas majeur";
        }

        ?>

    </p>

    <h3>Exercice 7</h3>

    <p>
        <?php
        if (!$isEasy) {
            // veut dire false
            echo "c'est pas bon";
        } else {
            echo "c'est ok";
        }
        ?>

    </p>

    <h3>Exercice 8</h3>

    <p>
        <?php
        if ($isEasy) {
            //  veut dire true
            echo "c'est ok";
        } else {
            echo "c'est pas bon";
        }
        ?>

    </p>


</body>

</html>