<?php

require_once '..\model\model_user.php';

$error = array();

if (isset($_POST['userMail'])) {
    if (empty($_POST['userMail'])) {
        $error['userMail'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['userPassword'])) {
    if (empty($_POST['userPassword'])) {
        $error['userPassword'] = 'Veuillez Renseigner le champ';
    };
}

if (isset($_POST['loginSubmit']) && count($error) == 0) {

    $loginUser = new User;

    $mail = $_POST['userMail'];
    $password = $_POST['userPassword'];

    if ($loginUser->VerifyLogin($mail, $password)) {

        session_start();
        $_SESSION['user'] = $loginUser->getUserMail($mail);
        header('Location: ..\index.php');

    } else {

        $error['login'] = 'mauvais login / mot de passe';
        
    }
}