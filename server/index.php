<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Exercice 2</h2>

    <p>Nom du server : <?= $_SERVER['SERVER_NAME']; ?></p>
    <p>User agent: <?= $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p>Adresse IP: <?= $_SERVER['REMOTE_ADDR']; ?></p>


</body>

</html>