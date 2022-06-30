<?php
$days = [
    1 => "Lundi",
    2 => "Mardi",
    3 => "Mercredi",
    4 => "Jeudi",
    5 => "Vendredi",
    6 => "Samedi",
    7 => "Dimanche"
];

$months = [
    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Août",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre"
];

if (isset($_GET['month'])) {
    $monthNumber = $_GET['month'];
} else {
    $monthNumber = date('n');
};
// si month existe alors récupère le mois dans le tableau, sinon prend le mois en cours

// effectue une confitions sur le paramètre d'URL 'year' si récupère sa valeur, sinon prend l'année en cours. 
if (isset($_GET['year'])) {
    $year = $_GET['year'];
} else {
    $year = date('Y');
};

// nous récupérons le mois en toute lettre à l'aide du tableau $months et l'index de $monthNumber. 
$monthLetters = $months[$monthNumber];

$totalDaysinMonth = cal_days_in_month(CAL_GREGORIAN, $monthNumber, $year);
$firstDayinMonth = date('N', mktime(0, 0, 0, $monthNumber, 1, $year));
$lastDayinMonth = date('N', mktime(0, 0, 0, $monthNumber, $totalDaysinMonth, $year));

// si 1er jour du mois dimanche, alors 7-1, ajoute 6 cases avant pour le calendrier . 
// si dernier jour du mois lundi, alors 7-1 6 cases à ajouter après pour le calendrier. 
$totalCases = ($firstDayinMonth - 1) + $totalDaysinMonth + (7 - $lastDayinMonth);

// calculer le timestamp de la première case du calendrier. On prend le premier jour du mois et on enlève cases du mois dernier pour savoir quel est le jour qui commence la semaine. 
// (2022-6-1 moins nombres de cases vides avant le 1er jour du mois --- jours)
$findFirstCaseTimestamp =  strtotime("$year-$monthNumber-1" . "-" . ($firstDayinMonth - 1) . 'days');


/**
 * fonction permettant de créer les dates correspondantes aux jours fériés français
 * @param int $year ex. 1979
 * @return array structure 'mm-dd' => 'jour férié'
 */
function getSpecialDays($year)
{
    // On definie le jour de pâque selon l'année choisie : on se base sur le 21 Mars
    $base = new DateTime("$year-03-21");
    $days = easter_days($year);
    // on formate cette date en format (yyyy-mm-dd) pour faciliter la manipulation par la suite
    $easterDay = $base->add(new DateInterval("P{$days}D"))->format('Y-n-d');

    $specialDays = [
        // On définie les jours fériés fixe : les classiquess 8 jours 
        // format de la clé : timestamp, la clé permettra d'obtenir le jour férié respectif
        strtotime("$year-1-1") => '1er janvier',
        strtotime("$year-5-1") => 'Fête du travail',
        strtotime("$year-5-8") => 'Victoire 1945',
        strtotime("$year-7-14") => 'Fête nationale',
        strtotime("$year-8-15") => 'Assomption',
        strtotime("$year-11-1") => 'Toussaint',
        strtotime("$year-11-11") => 'Armistice 1918',
        strtotime("$year-12-25") => 'Noël',

        // Jour feries qui dependent du jour de pâque
        strtotime("$easterDay + 1 days") => 'Lundi de pâques',
        strtotime("$easterDay + 39 days") => 'Ascension',
        strtotime("$easterDay + 50 days") => 'Pentecôte', 
        
        // Anniversaires apprenants LHP8 :
        strtotime("$year-05-23") => 'Anousone <i class="bi bi-balloon"></i>', 
        strtotime("$year-09-21") => 'Sophie <i class="bi bi-balloon-heart"></i>', 
        strtotime("$year-10-11") => 'Jordan <i class="bi bi-balloon"></i>', 
        strtotime("$year-02-21") => 'Valentin <i class="bi bi-balloon"></i>', 
        strtotime("$year-12-21") => 'Alex <i class="bi bi-balloon"></i>', 
        strtotime("$year-12-20") => 'Mika <i class="bi bi-balloon"></i>', 
        strtotime("$year-04-10") => 'Stella <i class="bi bi-balloon-heart"></i>'
    ];

    return $specialDays;
};

// cette fonction nous permet de définir un array $arraySpecialDays contenant le timestamp de tous les jours fériés. 
$arraySpecialDays = getSpecialDays($year);



// va prendre deux paramètres, va créer une case dans le calendrier. Timestamp et le numéro de la case. 
function createCase($findFirstCaseTimestamp, $caseNumber, $month, $arraySpecialDays)
{
    // calcul du timestamp de la case, utilise la fonction strtotime
    // strtotime(date US, rajoute la journée en fonction de la case d'où le moins 1)
    $timestamp = strtotime(date('Y-m-d', $findFirstCaseTimestamp) . '+' . ($caseNumber - 1) . 'days');

    if (array_key_exists($timestamp, $arraySpecialDays)) {
        return '<div class="text-center p-3 border bg-warning border-dark case ">' . date('j', $timestamp) . '<br>' . $arraySpecialDays[$timestamp]  . '</div>';
    } else if (date('Y-m-d', $timestamp,) == date('Y-m-d')) {
        // pour mettre en couleur la date du jour
        return '<div class="text-center p-3 border bg-info border-dark case">' . date('j', $timestamp) . '</div>';
    } else if (date('n', $timestamp,) == $month) {
        return '<div class="text-center p-3 border border-dark case">' . date('j', $timestamp) . '</div>';
    } else {
        // faire une conditions pour griser les cases qui ne sont pas dans le mois en cours.
        return '<div class="text-center p-3 border bg-secondary border-dark case">' . date('j', $timestamp) . '</div>';
    };
};
