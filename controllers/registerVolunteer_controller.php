<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_user.php';

$error = array();

$nameRegex = '/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u';
$birthDateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";


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

        $firstname = htmlspecialchars($_POST['volunteerFirstname']);
        $lastname = htmlspecialchars($_POST['volunteerLastname']);
        $age = htmlspecialchars($_POST['volunteerBirthdate']);
        $idUser = $_SESSION['user']['id_user'];


        $user->updateVolunteer($firstname, $lastname, $age, $idUser);

        header('Location: ..\view\waiting.php');
        
};