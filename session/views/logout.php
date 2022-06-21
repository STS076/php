<?php
session_start();
require_once '../controller/logout-controller.php';
?>

<?php include 'elements/header.php' ?>

<body>
    <a href="login.php" class="m-2 text-decoration-none border border-dark p-2 shadow-sm">retour</a>


    <div class="container d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
        <div class="col-lg-8 col-12 text-center fw-bold">
            <p>Vous avez bien été déconnecté de votre compte.</p>
        </div>
    </div>

</body>

</html>