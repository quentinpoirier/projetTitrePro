<?php

require_once '..\model\model_user.php';

$registerSuccess = false;

$error = array();

$nameRegex = '/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u';
$adressRagex = '/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/';
$phoneRagex = '/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/';
$sirenRegex = '/^[0-9]{9}$/';
$birthDateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";
$passwordRegex = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";


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

if (isset($_POST['registerSubmit']) && count($error) == 0) {

        $user = new User();

        $mail = htmlspecialchars($_POST['userMail']);
        $password = password_hash($_POST['userPassword'], PASSWORD_BCRYPT);
        $idUsertypes = htmlspecialchars($_POST['userType']);


        $user->addUser($mail, $password, $idUsertypes);
        
        $registerSuccess = true;
};