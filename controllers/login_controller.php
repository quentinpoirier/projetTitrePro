<?php

$error = array();

$passwordRegex = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

if (isset($_POST['userMail'])) {
    if (filter_var($_POST['userMail'], FILTER_VALIDATE_EMAIL) == false) {
        $error['userMail'] = 'Mauvais format';
    };
    if (empty($_POST['userMail'])) {
        $error['userMail'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['userPassword'])) {
    if (!preg_match($passwordRegex, $_POST['userPassword']) == false) {
        $error['userPassword'] = 'Mauvais format';
    };
    if (empty($_POST['userPassword'])) {
        $error['userPassword'] = 'Veuillez renseigner le champ';
    };
}