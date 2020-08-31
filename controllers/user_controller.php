<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
}

require_once '..\model\model_user.php';

var_dump($_SESSION['user']);


$error = array();

$nameRegex = '/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u';
$birthDateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";
$adressRagex = '/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/';
$phoneRagex = '/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/';
$sirenRegex = '/^[0-9]{9}$/';


if (isset($_POST['volunteerFirstname'])) {
    if (preg_match($nameRegex, $_POST['volunteerFirstname']) == false) {
        $error['volunteerFirstname'] = 'Mauvais format';
    };
    if (empty($_POST['volunteerFirstname'])) {
        $error['volunteerFirstname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['volunteerLastname'])) {
    if (preg_match($nameRegex, $_POST['volunteerLastname']) == false) {
        $error['volunteerLastname'] = 'Mauvais format';
    };
    if (empty($_POST['volunteerLastname'])) {
        $error['volunteerLastname'] = 'Veuillez renseigner le champ';
    };
}
if (isset($_POST['volunteerBirthdate'])) {
    if (preg_match($birthDateRegex, $_POST['volunteerBirthdate']) == false) {
        $error['volunteerBirthdate'] = 'Mauvais format';
    };
    if (empty($_POST['volunteerBirthdate'])) {
        $error['volunteerBirthdate'] = 'Veuillez renseigner le champ';
    };
}

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

$user = new User();

if (isset($_SESSION['user'])) {

    $getUserArray = $user->getUserInfos($_SESSION['user']['id_user']); 
    var_dump($getUserArray);
}



if (isset($_POST['updateUserSubmit']) && count($error) == 0) {

    $user = new User();

    if ($_SESSION['user']['id_usertypes'] == '1') {

    $firstname = htmlspecialchars($_POST['volunteerFirstname']);
    $lastname = htmlspecialchars($_POST['volunteerLastname']);
    $age = htmlspecialchars($_POST['volunteerBirthdate']);
    $idUser = $_SESSION['user']['id_user'];

    $user->updateVolunteer($firstname, $lastname, $age, $idUser);

    } else {

    $name = htmlspecialchars($_POST['oragnizationName']);
    $adress = htmlspecialchars($_POST['organizationAdress']);
    $phone = htmlspecialchars($_POST['organizationPhone']);
    $orgaMail = htmlspecialchars($_POST['organizationMail']);
    $siren = htmlspecialchars($_POST['organizationSiren']);
    $desc = htmlspecialchars($_POST['organizationDesc']);
    $activity = htmlspecialchars($_POST['activity']);
    $idUser = $_SESSION['user']['id_user'];

    $user->updateOrganization($name, $adress, $phone, $orgaMail, $siren, $desc, $activity, $idUser);
        var_dump($user);
    }  
};
