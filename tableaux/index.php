<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <title>Document</title>

    <style>
        body {
            font-family: 'Poppins';
            text-align: center;
        }
    </style>

</head>

<body>

    <h1>Les Tableaux</h1>

    <h2>Exercice 1</h2>

    <?php
    $tableauMois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
    var_dump($tableauMois);
    ?>

    <h2>Exercice 2</h2>

    <?php
    print_r($tableauMois[2]);
    ?>

    <h2>Exercice 3</h2>

    <?php
    print_r($tableauMois[5]);
    ?>

    <h2>Exercice 4</h2>

    <?php
    print_r($tableauMois[7] = "août");
    ?>

    <h2>Exercice 5</h2>

    <?php
    $départements = array(
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62"  => "Pas de Calais",
        "80" => "Somme",
    );
    print_r($départements);
    ?>

    <h2>Exercice 6</h2>

    <?php
    echo $départements["59"];
    ?>

    <h2>Exerice 7</h2>

    <?php
    print_r($départements["51"] = "Marne");
    print_r($départements);
    ?>

    <h2>Exercice 8</h2>

    <?php
    foreach ($tableauMois as $value) {
        echo "$value <br>";
    }
    ?>

    <h2>Exercice 9</h2>
    <?php
    foreach ($départements as $value) {
        echo "<p class='badge bg-danger m-2'>$value</p>";
    }
    ?>

    <h2>Exercice 10</h2>
    <?php
    foreach ($départements as $value => $key) {
        echo "<p class='badge bg-info m-2'>$value - $key</p>";
    }
    ?>
</body>

</html>