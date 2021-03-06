<?php

require_once "./data/glace.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/style/style.css">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/iconeglace.png">





    <title>Glace</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="icone" src="assets/img/iconeglace.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control " type="search" placeholder="rechercher" aria-label="Search">
                        <button class="btn " type="submit" "><i class=" bi bi-search " class=" bg-danger text-white"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="background">

        <div class="container">
            <div class="row d-flex justify-content-evenly py-5">

                <?php
                foreach ($array as $key => $value) {
                ?>

                    <div class="card col-lg-4 col-11 p-0 m-2">
                        <img src="assets/img/<?= $value["picture"] ?>.jpg" class="card-img-top" alt="image glace cornet bubble waffle">
                        <div class="card-body">
                            <p class="card-title text-center fw-bold"><?= $value["name"] ?></p>
                            <p class="card-text"><?= $value["description"] ?></p>
                            <div class="d-flex justify-content-evenly">
                                <a class="badge p-2 bg-danger text-decoration-none"><?= $value["price"] ?> ???</a>
                                <a class="badge p-2 bg-danger text-decoration-none" href="assets/deux.php?choix=<?= $key ?>">Commander</a>
                            </div>
                        </div>
                    </div>

                <?php }
                ?>

            </div>

        </div>


    </main>

    <footer>
        <div class="text-center p-4">
            ?? Sophie Toussaint, miam miam miam c'est bon les glaces
        </div>
    </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</body>

</html>