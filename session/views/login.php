<?php

session_start();

require_once '../controller/login-controller.php';
?>

<?php include 'elements/header.php' ?>

<body>

        <form action="" method="POST">

            <div class="container d-flex align-items-center flex-column rounded my-5 p-5 border border-dark shadow">
                <div>
                    <span class="fs-4 ms-4 pb-3">Veuillez rentrer les informations ci-dessous afin de vous connecter : </span>
                </div>

                <div class=" form-group col-lg-6 col-12 my-3 text-center">
                    <label>Pseudo</label>
                    <input class="text-center form-control" placeholder="pseudo" id="pseudo" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo">
                    <p class="text-danger"><?= isset($errors['pseudo']) ? $errors['pseudo'] : '' ?></p>
                </div>

                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label>Mot de passe:</label>
                    <input type="password" class="text-center form-control" id="password" placeholder="Mot de passe" name="password">
                    <p class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
                </div>

                <div class="my-3 text-center">
                    <button class="btn btn-success" id="submit" name="submit">S'identifier</button>
                </div>

            </div>
        </form>

  

</body>

</html>