<?php

$line = 4;
$theme = "text-bg-dark";
$nombre = 1; 

?>

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
        }
    </style>

</head>

<body>

    <h1 class="text-center mt-5">Boucle Tableau</h1>


    <div class="row d-flex justify-content-evenly align-items-center m-0">
        <div class="col-lg-5 col-12 px-5">
            <table class="table table-striped table-hover ">
                <thead>
                    <tr class="text-center">
                        <th scope="col"><i class="bi bi-list-ol"></i></th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col"><i class="bi bi-book"></i></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php
                    for ($i = 1; $i <= $line; $i++) {
                    ?>

                        <tr class="text-center">
                            <th scope="row"><?= $i ?></th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>LHP8 </td>
                        </tr>


                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>


    <h2 class="text-center"> Voiture</h2>

    <div class="row d-flex justify-content-evenly align-items-center m-0">

        <?php
        for ($i = 1; $i <= $line; $i++) {
        ?>

            <div class="card col-lg-4 col-12 m-2 shadow-sm <?= $theme ?>">
                <h2 class="text-center pt-2 text-decoration-underline">Ma voiture</h2>
                <img src="assets/img/fiat500.jpg" class="card-img-top" alt="les fous du volant">
                <div class="card-body">
                    <p class="text-center fs-6 ">Elle marche (photo non contractuelle)</p>
                    <p class="fs-5 text-center">D'occasion, je la vends pas</p>
                    <a href="https://www.fiat-500-occasion.com/" class="btn btn-primary">Achetez-moi</a>
                </div>
            </div>

        <?php }
        ?>

    </div>

    <h2 class="text-center m-5">Calendrier</h2>

    <div class="row d-flex justify-content-evenly align-items-center m-0">
        <div class="col-lg-5 col-12 px-5">
            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Lundi</th>
                        <th scope="col">Mardi</th>
                        <th scope="col">Mercredi</th>
                        <th scope="col">Jeudi</th>
                        <th scope="col">Vendredi</th>
                        <th scope="col">Samedi</th>
                        <th scope="col">Dimanche</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">


                    <?php
                    for ($semaine = 1; $semaine <= 6; $semaine++) {
                    ?>

                        <tr class="text-center">
                            <?php
                            for ($jours = 1; $jours <= 7; $jours++) {
                            ?>

                            <td class="text-center"><?= $nombre++ ?></td>

                            <?php
                            }
                            ?>

                        </tr>

                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>







    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">




</body>

</html>