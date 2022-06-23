<?php

session_start();

require_once '../controller/login-controller.php';
?>

<?php include 'elements/header.php' ?>

<body class="d-flex flex-column min-vh-100 background">

    <div class="">
        <a href="home.php" class="text-decoration-none text-white shadow-sm py-5">retour</a>
    </div>


    <form action="" method="POST">

        <div class="container bienvenue d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
            <div>
                <span class="fs-4 ms-4 pb-3 text-light">Veuillez rentrer les informations ci-dessous afin de vous connecter : </span>
            </div>

            <div class=" form-group col-lg-6 col-12 my-3 text-center">
                <label class="text-light">Pseudo</label>
                <input class="text-center form-control identify" placeholder="pseudo" id="pseudo" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo">
                <p class="text-danger"><?= isset($errors['pseudo']) ? $errors['pseudo'] : '' ?></p>
            </div>

            <div class="form-group col-lg-6 col-12 my-3 text-center">
                <label class="text-light">Mot de passe:</label>
                <input type="password" class="identify text-center form-control" id="password" placeholder="Mot de passe" name="password">
                <p class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
            </div>

            <div class="my-3 text-center">
                <button class="btn bouton" id="submit" name="submit">S'identifier</button>
            </div>

        </div>
    </form>

    <?php include 'elements/footer.php' ?>

</body>

</html>