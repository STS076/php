<?php

require_once 'controller/form-controller.php';


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>

    <style>
        body {
            font-family: 'Poppins';
        }
    </style>

</head>

<body>



    <?php if ($showForm) { ?>

        <h1 class="m-5 text-center">Formulaire de contact</h1>

        <form action="" method="POST">

            <div class="container d-flex align-items-center flex-column  subway mt-1 mb-4 p-5 border border-dark shadow" id="page">
                <div>
                    <span class="fs-4 ms-4 pb-3">Veuillez rentrer les informations ci-dessous afin de vous inscrire : </span>
                </div>

                <div class=" form-group col-lg-6 col-12 my-3 text-center">
                    <label>Nom:</label>
                    <input class="text-center form-control" placeholder="Nom" id="surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : '' ?>" name="surname">
                    <p class="text-danger" id="errorsurname"><?= isset($errors['surname']) ? $errors['surname'] : '' ?></p>
                </div>

                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label>Prénom:</label>
                    <input class="text-center form-control" placeholder="Prénom" id="firstname" name="firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                    <p class="text-danger" id="errorname"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></p>
                </div>

                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label>Adresse email:</label>
                    <input class="text-center form-control" id="emailAddress" placeholder="Email" name="emailAddress" value="<?= isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>">
                    <p class="text-danger" id="erroremailAddress"><?= isset($errors['emailAddress']) ? $errors['emailAddress'] : '' ?></p>
                </div>

                <div class="form-group col-lg-6 col-12 my-3 text-center">
                    <label>Mot de passe:</label>
                    <input type="password" class="text-center form-control" id="password" placeholder="Mot de passe" name="password">
                    <p class="text-danger" id="errorpassword"><?= isset($errors['password']) ? $errors['password'] : '' ?></p>
                </div>

                <div class="col-lg-6 col-12 my-3 form-group my-3 text-center">
                    <label>Confirmer votre mot de passe:</label>
                    <input type="password" class="text-center form-control" id="confirmPassword" placeholder="Confirmer votre mot de passe" name="confirmPassword">
                    <p class="text-danger" id="errorconfirmPassword"><?= isset($errors['confirmPassword']) ? $errors['confirmPassword'] : '' ?></p>
                </div>

                <div class="col-lg-6 col-12 my-3 form-group my-3 text-center">
                    <label for="formula">Abonnement :</label>
                    <select class="text-center" name="formule" id="formule">
                        <option selected disabled>Veuillez sélectionner une formule</option>
                        <option value="1">Etudiant</option>
                        <option value="2">Normal</option>
                        <option value="3">Premium</option>
                    </select>
                    <p class="text-danger" id="formule"><?= isset($errors['formule']) ? $errors['formule'] : '' ?></p>
                </div>

                <div class="row text-center">
                    <div class="col-lg-12 col-12 my-3">
                        <p>J'ai lu et j'accèpte les conditions générales d'utilisation :</p>
                        <input type="checkbox" id="checkbox" name="checkbox" value="<?= isset($_POST['checkbox']) ? $_POST['checkbox'] : '' ?>">
                        <p class="text-danger" id="errorcheckbox"><?= isset($errors['checkbox']) ? $errors['checkbox'] : '' ?></p>
                    </div>
                </div>

                <div class="my-3 text-center">
                    <button class="btn btn-success" id="submit" name="submit">S'inscrire</button>
                </div>

                <div class="row text-center inscrit mt-3">
                    <p>Déjà inscrit?<span class="text-decoration-underline ms-1">Se connecter</span></p>
                </div>
            </div>
        </form>

    <?php } else { ?>

        <h1 class="text-center mb-4 p-5 bg-dark text-white">PAGE USER</h1>

        <div class="text-center">
            <p> Bonjour, <?= safeInput($_POST['firstname']) ?> <?= safeInput($_POST['surname']) ?>, merci de votre instription pour la formule <?= $arrayFormula[safeInput($_POST['formule'])] ?>.<br>
                Un email de confirmation a été envoyé à l'adresse suivante : <?= safeInput($_POST['emailAddress']) ?>
            </p>
        </div>

        <p class="text-center">Nous vous recontacterons dans les plus bref délais</p>

        <div class="row text-center">
            <a href="index.php" class="btn btn-dark">Retour</a>
        </div>

    <?php } ?>


    <!-- exercices -->
    <h2>Exercice 1</h2>
    <!-- méthode GET -->

    <form action="redirection.php" method="GET">
        <p>Votre nom : <input type="text" name="nom" /></p>
        <p>Votre prénom : <input type="text" name="surname" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

    <h2>Exercice 2</h2>
    <!-- méthode post -->

    <form action="redirection.php" method="post">
        <p>Votre nom : <input type="text" name="nom" /></p>
        <p>Votre prénom : <input type="text" name="surname" /></p>
        <p><input type="submit" value="OK"></p>
    </form>
    <!-- pour les choses sensibles mettre du poste car ne se montre pas dans la barre d'état.  -->

</body>

</html>