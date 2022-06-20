<?php

require_once 'flavors.php';

// Si paramètre id absent, alors on effectue une redirection vers la page 404
if (!isset($_GET['id'])) {
    header('Location: 404.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-info text-center text-white">

    <h1 class="m-3">PAGE 2</h1>

    <div class="row justify-content-center">
        <div class="bg-light rounded shadow text-black col-3 p-4 m-3">

        <!-- Nous vérifions que le clef existe dans le tableau à l'aide de la fonction array_key_exists  -->
            <?php if (array_key_exists($_GET['id'], $flavors)) { ?>
                <!-- si ok, on afficher la valeur -->
                <p><?= $flavors[$_GET['id']] ?></p>
            <?php } else { ?>
                <!-- sinon, on invite l'utilisateur à aller sur l'accueil -->
                <p>Veuillez sélectionner un parfum valide</p>
            <?php } ?>

        </div>
    </div>

    <a href="index.php" class="btn btn-primary">RETOUR</a>

</body>

</html>