<?php

require_once "../public/data/shoes.php";
// var_dump($array);

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="icon" type="image/png" sizes="16x16" href="https://cdn.icon-icons.com/icons2/1306/PNG/512/shoe_86128.png">

    <link rel="stylesheet" href="../public/css/style.css">

    <title>LHP8's Shoes</title>

</head>

<body>

    <header class="pt-5">
        <h1 class="text-center pt-5 text-light fw-bold">LHP8's Shoes</h1>

    </header>


    <nav class="navbar pink navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">Shoes LHP8</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Femmes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sandales</a></li>
                            <li><a class="dropdown-item" href="#">Baskets</a></li>
                            <li><a class="dropdown-item" href="#">Bottines</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hommes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sandales</a></li>
                            <li><a class="dropdown-item" href="#">Baskets</a></li>
                            <li><a class="dropdown-item" href="#">Bottines</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Enfant
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sandales</a></li>
                            <li><a class="dropdown-item" href="#">Baskets</a></li>
                            <li><a class="dropdown-item" href="#">Bottines</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Rechercher">
                    <button class="btn bg-light" type="submit"><i class="bi bi-search text-dark"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <div class="row justify-content-center m-0 py-3">


            <?php
            foreach ($array as $value) {

            ?>
                <div class="card col-lg-3 col-11 mt-5 mx-2 shadow-sm p-0">
                    <img class="card-img-top photoChaussures m-0 p-0" src="/public/img/<?= $value["picture"] ?>.webp" alt="image paire de chaussure à vendre sur notre site">
                    <div class="card-body ">
                        <p class="card-title fs-4 fw-bold text-center"><?= $value["name"] ?></p>
                        <p class="card-text"><?= $value["brand"] ?><span class="ms-2"><?= $value["color"] ?></span></p>
                        <div class="d-flex justify-content-center">
                            <div class="badge pink px-5 py-2 fs-6"><?= $value["price"] ?>€</div>
                            <div class="badge pink ms-2 px-5 py-2 fs-6">Taille <?= $value["size"] ?></div>
                        </div>
                    </div>
                </div>

            <?php }
            ?>

        </div>
    </main>

    <footer>
        <div class="text-center p-4">
            © Sophie Toussaint
        </div>
    </footer>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



</body>

</html>