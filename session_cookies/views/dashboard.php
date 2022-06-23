<?php

session_start();

require_once '../controller/dashboard-controller.php';

?>

<?php include 'elements/header.php' ?>

<body class="background d-flex flex-column min-vh-100">
    <div class="">
        <a href="home.php" class="text-decoration-none text-white shadow-sm py-5">retour</a>
    </div>


    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-lg-8 col-12 text-center fw-bold">
            <p>Bienvenue <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['surname'] ?></p>
        </div>
    </div>

    <div class="text-center p-5 m-5 ">
        <a href="logout.php" class="deco m-2 text-decoration-none text-white text-decoration-underline text-dark p-2 ">Se déconnecter</a>
    </div>

    <?php include 'elements/footer.php' ?>


</body>

</html>