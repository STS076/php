<header class="background">

    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong mb-5 pb-5">
        <div class="container-fluid">
            <a class="navbar-brand me-5 pe-5" href="home.php"><img class="coeur" src="../public/img/icone.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">

                        <?php if (isset($_SESSION['user'])) {  ?>
                            <a class="nav-link fw-bold active titre me-5 " href="logout.php">
                                DECONNEXION
                            </a>
                        <?php } else {  ?>
                            <a class="nav-link fw-bold active titre me-5 " href="login.php">
                                S'IDENTIFIER
                            </a>
                        <?php   }
                        ?>

                    </li>
                    <li class="nav-item ">
                        <a href="recontres.php" class="nav-link  fw-bold  active titre me-5">RENCONTRES</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fw-bold  active titre me-5" href="settings.php">SETTINGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fw-bold  active titre" href="#" tabindex="-1" aria-disabled="true">QUI
                            SOMMES-NOUS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="pb-5">
        <h1 class="text-center text-white py-5 sophie ">LHP8 RENCONTRES</h1>
    </div>

    <nav class="navbar navbar-expand-lg shadow-5-strong recherche p-4 mt-5">
        <div class="container-fluid ">
            <a class="navbar-brand " href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active titre box text-dark mx-3 px-4 fw-bold" aria-current="page" href="#">Hommes
                            <i class="bi bi-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active titre box mx-3 px-4 fw-bold text-dark" href="#">Femmes <i class="bi bi-chevron-down"></i></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="titre text-dark py-2 me-5 devis mx-3 px-4 fw-bold text-decoration-none">Villes / Régions</a>
                </form>
            </div>
        </div>
    </nav>

</header>