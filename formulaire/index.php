<?php
require_once 'controller/form-controller.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1 class="m-5 text-center">Formulaire de contact</h1>

    <!-- utilisation de la balise form : action la page de redirection et method la méthode à employer -->
    <form action="" method="POST">

        <div class="row justify-content-center">
            <div class="col-3 border border-secondary rounded shadow p-4">

                <div class="my-2">
                    <label for="lastname">Nom</label><span class="ms-2 text-danger">Mauvais format</span>
                    <br>
                    <input type="text" id="lastname" name="lastname" placeholder="ex. DURANT">
                </div>

                <div class="my-2">
                    <label for="firstname">Prénom</label><span class="ms-2 text-danger">Champs vide</span>
                    <br>
                    <input type="text" id="firstname" name="firstname" placeholder="ex. Jean">
                </div>

                <div class="my-2">
                    <label for="mail">Courriel</label>
                    <br>
                    <input type="mail" id="mail" name="mail" placeholder="ex. jean.durant@mail.fr">
                </div>

                <div class="my-2">
                    <label for="password">Mot de passe</label>
                    <br>
                    <input type="password" id="password" name="password">
                </div>

                <div class="my-2">
                    <label for="confirmPassword">Confirmation du mot de passe</label>
                    <br>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                </div>

                <div class="my-2">
                    <label for="formula">Abonnement</label>
                    <br>
                    <select name="formula" id="formula">
                        <option selected disabled>Veuillez sélectionner une formule</option>
                        <option value="1">Etudiant</option>
                        <option value="2">Normal</option>
                        <option value="3">Premium</option>
                    </select>
                </div>

                <div class="mt-4">
                    <input type="checkbox" id="cgu" name="cgu">
                    <label for="cgu">J'ai lu et j'accepte les CGU</label>
                </div>

                <button class="btn btn-dark my-3">Valider</button>

            </div>
        </div>

    </form>
</body>

</html>