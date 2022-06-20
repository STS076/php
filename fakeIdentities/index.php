<?php

require_once "./data/fakeProfile.php";
$langue = "au";
// $limit = 10; 
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Dancing+Script:wght@500&family=Kdam+Thmor+Pro&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300;600&family=Raleway:wght@300&family=Share+Tech+Mono&family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <link rel="stylesheet" href="style/style.css">

    <link rel="stylesheet" href="style/styleFr.css">


    <?php
    if (isset($_GET["langue"]) && $_GET["langue"] == "fr") {

    ?>
        <link rel="stylesheet" href="style/styleFr.css">

    <?php } else if (empty($_GET["langue"])) { ?>
        <link rel="stylesheet" href="style/style.css">
    <?php
    } else {
        header('Location: erreur404.php');
        exit();
    }
    ?>

    <link rel="icon" type="image/png" sizes="16x16" href="">

    <link href="//db.onlinewebfonts.com/c/591a1311200119eefe5df87892d876be?family=Aurebesh" rel="stylesheet" type="text/css" />

    <title>Bounty Hunter Guild</title>

</head>

<body class="background">

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong mb-5 ">
            <div class="container-fluid text-center">
                <a class="navbar-brand " href="#"><img class="guild me-5" src="/img/guildLogo.png" alt="logo bounty hunter guild"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active titre me-5 pe-5" aria-current="page" href="#">nouveaux contrats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active titre me-5 pe-5" href="#">regles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active titre me-5 pe-5" href="#">clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active titre me-5 pe-5" href="#" tabindex="-1" aria-disabled="true">votre espace</a>
                        </li>
                        <li class="nav-item">
                            <?php
                            if (empty($_GET["langue"])) {
                            ?>
                                <a class="nav-link active titre me-5 pe-5 text-danger" href="http://fakeidentities.test/index.php?langue=fr"><i class="bi bi-translate info fs-3"></i></a>
                            <?php
                            } else if (isset($_GET["langue"]) && $_GET["langue"] == "fr") {
                            ?>
                                <a class="nav-link active titre me-5 pe-5 text-danger" href="http://fakeidentities.test/index.php"><i class="bi bi-translate info fs-3"></i></a>
                            <?php
                            } else {
                                header('Location: erreur404.php');
                                exit();
                            }


                            ?>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>

        <div class="row justify-content-evenly m-0">

            <?php
            foreach ($profile as $key => $value) {
            ?>

            <!-- fait tout disparaitre à enlever -->
                <?php
                if ($key == $limit){
                    exit; 
                }
                ?>
                <!-- fait tout disparaitre ????? why -->

                <div class="card mb-3 col-lg-4 col-11 mx-2 my-5 p-0 secondary">
                    <div class="row g-0">
                        <div class="col-md-4 text-center">
                            <img src="/img/avatars/<?= $value["picture"] ?>.jpg" class="card-img-top avatars" alt="wanted image">
                        </div>
                        <div class="col-md-8 m-0 p-0">
                            <div class="text-end">
                                <a type="button" class="m-0 p-0 btn text-light" data-bs-toggle="modal" data-bs-target="#<?= $value["picture"] ?>"><i class="bi bi-trash"></i></a>
                            </div>
                            <div class="card-body">
                                <p class="card-title text-center fw-bold"><?= $value["name"] ?></p>
                                <p class="text-light text-decoration-none m-1">bounty : <?= $value["price"] ?> credits</p>
                                <a class="text-decoration-none info m-1" href="pageDeux.php?cible=<?= $key ?>">+ d'info</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="<?= $value["picture"] ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content modal-lg">
                            <div class="modal-header grey">

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body grey">
                                <p>voulez-vous supprimer le profile de <?= $value["name"] ?> ?</p>
                            </div>
                            <div class="modal-footer grey">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">confirmer</button>
                            </div>
                        </div>
                    </div>
                </div>


            <?php }
            ?>
        </div>

    </main>

    <footer class="text-center p-4 footer mt-5">
        @sophie toussaint, bounty hunter guild
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


</body>

</html>