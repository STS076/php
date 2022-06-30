<?php
require_once '../data/fakeProfile.php'; 

// $display = 'cards'; 

if(isset($_COOKIE['affichage'])){
    $display = $_COOKIE['affichage'];
} else{
    $display = 'liste';
}; 

if(isset($_COOKIE['preference'])){
    $search = $_COOKIE['preference'];
} else{
    $search = 'lesDeux';
}; 

if(isset($_COOKIE['background'])){
    $style = $_COOKIE['background'];
} else{
    $style = 'main';
}