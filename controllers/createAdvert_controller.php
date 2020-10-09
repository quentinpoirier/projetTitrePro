<?php

session_start();

setlocale(LC_TIME, 'fr_fr');

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_advert.php';
require_once '..\model\model_activity.php';

$error = array();

$longString = '/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{0,200}$/';
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

if (isset($_POST['advertSubmit']) && count($error) == 0) {

    $advert = new Advert();

        $title = htmlspecialchars($_POST['advertTitle']);
        $object = htmlspecialchars($_POST['advertObject']);
        $desc = htmlspecialchars($_POST['advertDesc']);
        $date = htmlspecialchars(strftime('%Y-%m-%d', strtotime(date('d-m-Y'))));
        $user = htmlspecialchars($_SESSION['user']['id_user']);

        $advert->addAdvert($title, $object, $desc, $date, $user);
        header('location: ..\view\userAdvert.php');

}