<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <link rel=" stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <?php

    $portrait1 = array(
        'firstname' => 'Victor',
        'surname' => 'Hugo',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg'
    );

    $portrait2 = array(
        'firstname' => 'Jean',
        'surname' => 'De La Fontaine',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg'
    );

    $portrait3 = array(
        'firstname' => 'Pierre',
        'surname' => 'Corneille',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg'
    );

    $portrait4 = [
        'firstname' => 'Jean',
        'surname' => 'Racine',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg'
    ];

    ?>

    <h1 class="text-center m-2">Auteurs Français</h1>


    <?php
    function showArrays($portrait)
    {
    ?>
        <div class="card col-lg-4 col-11 m-5 shadow shadow-sm p-0 ">
            <img class="card-img-top m-0 p-0 photo" src="<?= $portrait['portrait'] ?>"  alt="image auteur classique <?= $portrait['firstname'] ?> <?= $portrait['surname'] ?>">
            <div class="card-body text-center">

                <div class="card-text">
                    <p><?= $portrait['firstname'] ?> <?= $portrait['surname'] ?> </p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


    <div class="row justify-content-evenly">

        <?php

        showArrays($portrait1);
        showArrays($portrait2);
        showArrays($portrait3);
        showArrays($portrait4);


        ?>


    </div>







    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</body>

</html>