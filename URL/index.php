<?php 
var_dump($_GET);
//  permet de tester les paramètres de fonction
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test URL</title>
</head>

<body>


<!-- ternaire -->
<p>

<?= isset($_GET['age']) ? 'Vous avez ' . $_GET['age'] . ' ans' : 'Veuillez saisir votre age' ?>

</p>

<!-- if else -->

<?php

if(isset($_GET["age"])){
    echo "Vous avez " . $_GET['age'] . " ans";
}
else {
    echo "L'age n'existe pas";
}

// isset va retourner vrai ou faux, si oui alors on l'affiche

?>


</body>

</html>