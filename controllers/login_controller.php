<?php

$error = array();

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