<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
}

require_once '..\model\model_advert.php';
require_once '..\model\model_activity.php';

$error = array();

$longString = '/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{0,20}$/';
$DateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";

if (isset($_POST['advertTitle'])) {
    if (preg_match($longString, $_POST['advertTitle']) == false) {
        $error['advertTitle'] = 'Mauvais format';
    };
    if (empty($_POST['advertTitle'])) {
        $error['advertTitle'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['advertObject'])) {
    if (preg_match($longString, $_POST['advertObject']) == false) {
        $error['advertObject'] = 'Mauvais format';
    };
    if (empty($_POST['advertObject'])) {
        $error['advertObject'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['advertDesc'])) {
    if (empty($_POST['advertDesc'])) {
        $error['advertDesc'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['advertDate'])) {
    if (preg_match($DateRegex, $_POST['advertDate']) == false) {
        $error['advertDate'] = 'Mauvais format';
    };
    if (empty($_POST['advertDate'])) {
        $error['advertDate'] = 'Veuillez renseigner le champ';
    };
}

$advert = new Advert();

if (isset($_SESSION['user'])) {

    $getAdvertArray = $advert->getAdvertByUser($_SESSION['user']['id_user']);
}


if (isset($_POST['updateAdvertSubmit']) && count($error) == 0) {

    $title = htmlspecialchars($_POST['advertTitle']);
    $object = htmlspecialchars($_POST['advertObject']);
    $desc = htmlspecialchars($_POST['advertDesc']);
    $date = htmlspecialchars($_POST['advertDate']);
    $idAdvert = htmlspecialchars($_POST['updateAdvertSubmit']);

    $advert->updateAdvert($title, $object, $desc, $date, $idAdvert);
}

if (isset($_POST['deleteAdvertSubmit'])) {

    $idAdvert = $_POST['deleteAdvertSubmit'];
    $advert->deleteAdvert($idAdvert);
    header('location: ..\view\userAdvert.php');
}