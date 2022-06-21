<?php

session_start();

require_once '../controller/dashboard-controller.php';

?>

<?php include 'elements/header.php' ?>

<body>
    <a href="login.php" class="text-decoration-none border border-dark shadow-sm p-2 mx-2">retour</a>

    <div class="container d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-lg-8 col-12 text-center fw-bold">
            <p>Bienvenue <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['surname'] ?></p>
        </div>
    </div>

    <div class="text-center">
        <a href="logout.php" class="m-2 text-decoration-none text-decoration-underline text-dark p-2 ">Se déconnecter</a>
    </div>

</body>

</html>