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

if (isset($_POST['validateSubmit'])) {

    $idAdvert = htmlspecialchars($_POST['validateSubmit']);

    $advert->updateAdvertValidate($idAdvert);
    header('Location: ..\view\modoAdvert.php');
}

if (isset($_POST['deleteSubmit'])) {

    $idAdvert = ($_POST['deleteSubmit']);

    $advert->deleteAdvert($idAdvert);
    header('Location: ..\view\modoAdvert.php');
}