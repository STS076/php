<?php

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}


// si je fais un POST, alors je vais créer un cookie. 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('preference', $_POST['preference'], time() + 3600);
    setcookie('affichage', $_POST['affichage'], time() + 3600);

    // il faut controller si la checkbox est cochée
    if(isset($_POST['background'])){
        setcookie('background', $_POST['background'], time() + 3600);
    } else{
        setcookie('background', '', time() -3600); 
    }
    header('Location: settings.php');
};




// faire une conditions si jamais ne sont pas dans var_dump car sinon erreur php