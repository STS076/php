<?php

require_once 'flavors.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test url</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="text-white bg-primary text-center">

    <h1 class="m-3">PAGE 1</h1>

    <p>Veuillez-faire un choix de parfum : </p>

    <!-- boucle php avec un alias $key et $value -->
    <?php foreach ($flavors as $key => $value) { ?>
        <!-- Nous utilisons la key pour permettre de parcourir le tableau
        Nous utilison le paramètre d'URL id -->
        <a href="choice.php?id=<?= $key ?>" class="btn btn-info"><?= $value ?></a>
    <?php } ?>

</body>

</html>