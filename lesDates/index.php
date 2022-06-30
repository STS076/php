<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

    <?php
    date_default_timezone_set('Europe/Paris');
    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Les Dates</h1>


    <h2>Date du jour complète</h2>
    <p>
        <?php
        echo date(DATE_ATOM,);
        ?>
    </p>
    <p>
        <?php
        echo date(DATE_RFC2822);
        ?>
    </p>

    <h2>Date -</h2>
    <p>
        <?php
        $date = date('d-m-Y');
        echo $date;
        ?>
    </p>

    <h2>Date /</h2>
    <p>
        <?php
        $date = date('d/m/Y');
        echo $date;
        ?>
    </p>
    <p>
        <?php
        setlocale(LC_ALL, 'fr_FR', 'French');
        echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
        ?>
    </p>

    <h2>Dates + et - 20 jours</h2>
    <p>
        <?php
        echo 'Aujourd\'hui :       ' . date('Y-m-d') . " ";
        echo '+ 20 jours : ' . date('Y-m-d', strtotime('+20 days')) . " ";
        ?>
    </p>
    <p>
        <?php
        echo 'Aujourd\'hui :       ' . date('Y-m-d') . " ";
        echo '-22 jours : ' . date('Y-m-d', strtotime('-22 days')) . " ";
        ?>
    </p>

    <h2>Timestamp</h2>
    <p>
        <?php
        echo mktime(15, 0, 0, 8, 2, 2016);
        echo ' secondes depuis le 1 janvier 1970'
        ?>
    </p>

    <h2>Jours écoulés</h2>
    <p>
        <?php
        $date = mktime(0, 0, 0, 6, 27, 2022);
        $jour =  mktime(0, 0, 0, 5, 16, 2016);
        echo ($date - $jour) / (60 * 60 * 24);
        // 60 seconde x 60 minutes x 24 heures
        ?>
    </p>

    <h2>Février 2016</h2>
    <p>
        <?php
        echo cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        ?>
    </p>

    <h2>Vendredi 13</h2>
    <?php
    $date = date(2022);
    if ($date == "friday" && $date == 13) {
        echo 'vendredi 13';
    }
    ?>

    <?php
    if (date('j') == 13 && date('w') == 5) {
        echo "Jason va te tuer";
    } else {
        echo "Ce n'est pas vendredi 13, tu ne vas pas mourir, congrats.";
    };

    echo  "<br>" . date("l", strtotime('2022/05/13'));
    echo "<br>" .  date('l \t\h\e jS', mktime(0, 0, 0, 5, 13, 2022));
    ?>

    <h2>Boucle dates</h2>
    <?php


    function totalVendredi13($year)
    {
        $months = [
            1 => 'janvier',
            2 => 'février',
            3 => 'mars',
            4 => 'avril',
            5 => 'mai',
            6 => 'juin',
            7 => 'juillet',
            8 => 'août',
            9 => 'septembre',
            10 => 'octobre',
            11 => 'novembre',
            12 => 'décembre'
        ];

        for ($index = 1; $index <= 12; $index++) {
            $day = date('l', mktime(0, 0, 0, $index, 13, $year));
            if ($day == 'Friday') {
                echo "<br>"."dans le mois de $months[$index] $year, il y aura un vendredi 13";
            }
        }
    };

    totalVendredi13(1992);
    ?>


</body>

</html>