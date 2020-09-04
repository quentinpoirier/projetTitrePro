<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_advert.php';

$advert = new Advert();

if (isset($_SESSION['user'])) {

    $getAdvertArray = $advert->getAdvert();
}

if (isset($_GET['advert'])) {
    $getAdvertById = $advert->getAdvertById(htmlspecialchars($_GET['advert']));
}