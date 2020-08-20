<?php

$error = array();

$nameRegex = '/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u';
$adressRagex = '/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/';
$phoneRagex = '/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/';
$sirenRegex = '/^[0-9]{9}$/';
$birthDateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";
$passwordRegex = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";


if (isset($_POST['userMail'])) {
    if (filter_var($_POST['organizationMail'], FILTER_VALIDATE_EMAIL) == false) {
        $error['userMail'] = 'Mauvais format';
    };
    if (empty($_POST['userMail'])) {
        $error['userMail'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['userPassword']) && isset($_POST['verifyPassword'])) {

    if (!preg_match($passwordRegex, $_POST['userPassword'])) {
        $error['userPassword'] = 'Mauvais Format';
    };
    if (empty($_POST['userPassword'])) {
        $error['PassuserPasswordword'] = 'Veuillez Renseigner le champ';
    };
    if (empty($_POST['verifyPassword'])) {
        $error['verifyPassword'] = 'Veuillez Renseigner le champ';
    };
    if ($_POST['verifyPassword'] != $_POST['userPassword']) {
        $error['verifyPassword'] = 'Les mots de passe ne sont pas identiques';
    };
};

if (isset($_POST['submit'])) {
    if (!array_key_exists('userType', $_POST)) {
        $error['userType'] = 'Veuillez renseigner le champ';
    };
}

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

if (isset($_POST['submit'])) {
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