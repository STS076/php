<?php session_start() ?>

<?php require_once '../controller/settings-controller.php' ?>

<?php include 'elements/header.php' ?>

<body class="d-flex flex-column min-vh-100 background">

    <a href="home.php" class="m-2 text-decoration-none text-white p-2">retour</a>

    <form action="" method="POST">

        <div class="container d-flex align-items-center flex-column  subway mt-1 mb-4 p-5 blanc" id="page">
            <p class="fw-bold fst-italic fs-3">Bonjour <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['surname'] ?></p>
            <div class="text-center">
                <span class="fs-5 p-2 text-dark fw-bold ">Paramètres : </span>
            </div>
            <div class="row text-center pt-3">
                <p class="text-dark p-0 m-0">Vos préférences de partenaire : </p>
                <div class="col-lg-12 col-12 my-3">

                    <span class="text-dark ">Hommes : </span>
                    <input class="me-4" type="radio" id="radio" name="preference" value="man" <?= isset($_COOKIE['preference']) ? ($_COOKIE['preference'] == 'man' ? 'checked' : '') : '' ?>>
                    <!-- si le cookie existe, si c'est un homme, alors on checked, sinon reste vide à l'extérieur de la ternaire, met la valeur par défaut si rien n'est coché   -->
                    <span class="text-dark">Femmes : </span>
                    <input class="me-4" type="radio" id="radio" name="preference" value="woman" <?= isset($_COOKIE['preference']) ? ($_COOKIE['preference'] == 'woman' ? 'checked' : '') : '' ?>>

                    <span class="text-dark">Aucune préférence : </span>
                    <input type="radio" id="radio" name="preference" value="lesDeux" <?= isset($_COOKIE['preference']) ? ($_COOKIE['preference'] == 'lesDeux' ? 'checked' : '') : 'checked' ?>>

                </div>
            </div>
            <div class="row text-center pt-3">
                <p class="text-dark p-0 m-0">Type de présentation : </p>
                <div class="col-lg-12 col-12 my-3">

                    <span class="text-dark">Cartes :</span>
                    <input type="radio" id="radio" name="affichage" value="cards" <?= isset($_COOKIE['affichage']) ? ($_COOKIE['affichage'] == 'cards' ? 'checked' : 'checked') : '' ?>>

                    <span class="text-dark">Liste :</span>
                    <input type="radio" id="radio" name="affichage" value="liste" <?= isset($_COOKIE['affichage']) ? ($_COOKIE['affichage'] == 'liste' ? 'checked' : '') : 'checked' ?>>

                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12 col-12 my-3">

                    <?php
                    if (empty($_COOKIE["background"]) && $style == "main") {
                    ?>
                        <span class="text-dark">Notre fond d'écran spécial saint Valentin :</span>
                        <input type="checkbox" id="checkbox" name="main" value="background">
                    <?php
                    } else if (isset($_COOKIE["background"])) {
                    ?>
                        <span class="text-dark">Revenir au fond d'écran normal : </span>
                        <input type="checkbox" id="checkbox" name="main2" value="background">

                    <?php } ?>


                </div>
            </div>
            <div class="my-3 text-center">
                <button class="btn bouton" id="submit">Valider les changements</button>
            </div>
        </div>

    </form>



    <?php include 'elements/footer.php' ?>

</body>

</html>