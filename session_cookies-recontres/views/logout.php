<?php
session_start();
require_once '../controller/logout-controller.php';
?>

<?php include 'elements/header.php' ?>

<body class="d-flex flex-column min-vh-100 background ">
    <div class="">
        <a href="home.php" class="text-decoration-none text-white shadow-sm py-5">retour</a>
    </div>


    <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-lg-8 col-12 text-center fw-bold">
            <p>Vous avez bien été déconnecté de votre compte.</p>
        </div>
    </div>

    <?php include 'elements/footer.php' ?>

</body>

</html>