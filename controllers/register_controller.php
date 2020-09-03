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


if (isset($_POST['userMail'])) {
    $user = new User();
    if (filter_var($_POST['userMail'], FILTER_VALIDATE_EMAIL) == false) {
        $error['userMail'] = 'Mauvais format';
    };
    if ($user->verifyMailExist($_POST['userMail'])) {
        $error['userMail'] = 'Le mail " ' . $_POST['userMail'] . ' " existe déja';
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

if (isset($_POST['registerSubmit'])) {
    if (!array_key_exists('userType', $_POST)) {
        $error['userType'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['g-recaptcha-response'])) {
    // clé captcha !!!
    $key = "6Ld_ecMZAAAAAH3j9mtLj_fwybdIT9sBAgJDNI5G";
    $captchaResponse = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $key . "&response=" . $captchaResponse . "&remoteip=" . $remoteip;
    $decode = json_decode(file_get_contents($api_url), true);
};

$messageError =  '';
if (isset($_POST['registerSubmit']) && count($error) == 0) {

    if ($decode['success'] == true) {

        $user = new User();

        $mail = htmlspecialchars($_POST['userMail']);
        $password = password_hash($_POST['userPassword'], PASSWORD_BCRYPT);
        $idUsertypes = htmlspecialchars($_POST['userType']);

        $user->addUser($mail, $password, $idUsertypes);

        $registerSuccess = true;

        session_start();
        $_SESSION['user'] = $user->getUserMail($mail);

        if ($_POST['userType'] == '1') {
            header('Location: ..\view\registerVolunteer.php');
        } else {
            header('Location: ..\view\registerOrganization.php');
        }

    } else {
        $messageError = 'Erreur : Veuillez cochez le captcha pour vous inscrire';
    };
};
