<?php

require_once '..\model\model_user.php';

$error = array();

$nameRegex = '/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u';
$adressRagex = '/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/';
$phoneRagex = '/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/';
$sirenRegex = '/^[0-9]{9}$/';
$birthDateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";

if (isset($_POST['oragnizationName'])) {
    if (preg_match($nameRegex, $_POST['oragnizationName']) == false) {
        $error['oragnizationName'] = 'Mauvais format';
    };
    if (empty($_POST['oragnizationName'])) {
        $error['oragnizationName'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['registerSubmit'])) {
    if (!array_key_exists('activity', $_POST)) {
        $error['activity'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['organizationAdress'])) {
    if (preg_match($adressRagex, $_POST['organizationAdress']) == false) {
        $error['organizationAdress'] = 'Mauvais format';
    };
    if (empty($_POST['organizationAdress'])) {
        $error['organizationAdress'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['organizationPhone'])) {
    if (preg_match($phoneRagex, $_POST['organizationPhone']) == false) {
        $error['organizationPhone'] = 'Mauvais format';
    };
    if (empty($_POST['organizationPhone'])) {
        $error['organizationPhone'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['organizationMail'])) {
    if (filter_var($_POST['organizationMail'], FILTER_VALIDATE_EMAIL) == false) {
        $error['organizationMail'] = 'Mauvais format';
    };
    if (empty($_POST['organizationMail'])) {
        $error['organizationMail'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['organizationSiren'])) {
    if (preg_match($sirenRegex, $_POST['organizationSiren']) == false) {
        $error['organizationSiren'] = 'Mauvais format';
    };
    if (empty($_POST['organizationSiren'])) {
        $error['organizationSiren'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['organizationDesc'])) {
    if (empty($_POST['organizationDesc'])) {
        $error['organizationDesc'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['registerSubmit']) && count($error) == 0) {

    $user = new User();

    $name = htmlspecialchars($_POST['oragnizationName']);
    $adress = htmlspecialchars($_POST['organizationAdress']);
    $phone = htmlspecialchars($_POST['organizationPhone']);
    $orgaMail = htmlspecialchars($_POST['organizationMail']);
    $siren = htmlspecialchars($_POST['organizationSiren']);
    $desc = htmlspecialchars($_POST['organizationDesc']);
    $activity = htmlspecialchars($_POST['activity']);
    $idUser = $_SESSION['user']['id_user'];


    $user->updateOrganization($name, $adress, $phone, $orgaMail, $siren, $desc, $activity, $idUser);

    header('Location: ..\index.php');
    
};