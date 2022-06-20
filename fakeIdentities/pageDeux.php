<?php

require_once "./data/fakeProfile.php";
$langue = "fr";

if (!isset($_GET['cible'])) {
    header('Location: erreur404.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset=" UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Dancing+Script:wght@500&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300;600&family=Raleway:wght@300&family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">

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
            <div class="container-fluid">
                <a class="navbar-brand " href="/index.php"><img class="guild  me-5" src="/img/guildLogo.png" alt="logo bounty hunter guild"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                      
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container p-5">
            <div class="row d-flex justify-content-evenly py-5 ">

                <div class="card mb-3 col-lg-6  col-11 mx-2 my-5 secondary">
                    <div class="row g-0">
                        <div class="col-md-5 ">
                            <img src="/img/avatars/<?= $profile[$_GET['cible']]['picture'] ?>.jpg" class="card-img-top avatars2 py-4" alt="wanted image">
                        </div>
                        <div class="col-md-7">

                            <p class="card-title text-center fs-3 fw-bold"><?= $profile[$_GET['cible']]['name'] ?></p>
                            <p class="card-title text-center fs-3 fw-bold"><?= $profile[$_GET['cible']]['price'] ?>credits</p>

                            <p class="travers  fs-1 text-danger">dangereux</p>

                            <p class="card-title  fw-bold"><?= $profile[$_GET['cible']]['address'] ?></p>
                            <p class="card-title   fw-bold"><?= $profile[$_GET['cible']]['postalZip'] ?></p>
                            <p class="card-title   fw-bold"><?= $profile[$_GET['cible']]['country'] ?></p>
                            <p class="card-title   fw-bold"><?= $profile[$_GET['cible']]['email'] ?></p>



                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <footer class="text-center p-4 footer mt-5">
        @sophie toussaint, bounty hunter guild
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


</body>

</html>