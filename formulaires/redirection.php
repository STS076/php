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
    <title>Document</title>
</head>

<body>

    <a href="index.php">retour</a>

    <div class="container border border-dark shadow d-flex align-items-center flex-column  subway mt-1 mb-4 p-5">

        <div class="col-lg-8 col-12 text-center">
            <p> Bonjour, <?= $_POST['firstname'] ?> <?= $_POST['surname'] ?>, merci de votre instription pour la formule <?= $_POST['formule'] ?>.<br>
                Un email de confirmation a été envoyé à l'adresse suivante : <?= $_POST['emailAddress'] ?>
            </p>
        </div>
    </div>



    <!-- méthode GET -->

    <h2>Exercice 1</h2>

    <p>Bonjour <?= $_GET['nom'] ?> <?= $_GET['surname'] ?> </p>

    <!-- méthode post -->

    <h2>Exercice 2</h2>

    <p> Bonjour, <?php echo ($_POST['nom']); ?>
        <?php echo ($_POST['surname']); ?>
    </p>


</body>

</html>