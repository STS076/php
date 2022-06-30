<?php require_once "controllers/calendar-controller.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./public/style.css">

    <title>Calendrier LHP8</title>

</head>

<body>
    <div class="text-center">
        <h1 class="p-2">CALENDRIER LHP8</h1>
        <h2>
            <!-- regarde si le paramètre month est présent dans l'URL, si est présent récupère sa valeur  -->
            <a class="btn btn-sm" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year - 1 ?>"><i class="fs-5 bi bi-chevron-double-left"></i></a>
            <?= $year ?>
            <a class="btn btn-sm" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year + 1 ?>"><i class="fs-5 bi bi-chevron-double-right"></i></a>
        </h2>
        <h2>
            <!-- regarde si le paramètre year est présent dans l'URL, si est présent récupère sa valeur  -->
            <a class="btn btn-sm" href="index.php?<?= isset($_GET['year']) ? 'year=' . $_GET['year'] . '&' : '' ?>month=<?= $monthNumber == 1 ? 12 : $monthNumber - 1 ?>"><i class="fs-5 bi bi-chevron-left"></i></a>
            <?= $monthLetters ?>
            <a class="btn btn-sm" href="index.php?<?= isset($_GET['year']) ? 'year=' . $_GET['year'] . '&' : '' ?>month=<?= $monthNumber == 12 ? 1 : $monthNumber + 1 ?>"><i class="fs-5 bi bi-chevron-right"></i></a>
        </h2>
    </div>

    <div class="row justify-content-center p-0 mx-0 my-3">
        <div class="col-lg10 col-10 calendar shadow-sm p-0 m-0 ">
            <?php
            foreach ($days as $key => $value) { ?>
                <div class="text-center text-light bg-dark p-2">
                    <?= $value ?>
                </div>
            <?php
            } ?>
            <?php
            for ($index = 1; $index <= $totalCases; $index++) { ?>
                <?= createCase($findFirstCaseTimestamp, $index, $monthNumber, $arraySpecialDays) ?>
            <?php
            }
            ?>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</body>

</html>