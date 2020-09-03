<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_user.php';

$error = array();

$longString = '/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{0,25}$/';

if (isset($_POST['contactObjet'])) {
    if (preg_match($longString, $_POST['contactObjet']) == false) {
        $error['contactObjet'] = 'Mauvais format';
    };
    if (empty($_POST['contactObjet'])) {
        $error['contactObjet'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['contactClaim'])) {
    if (empty($_POST['contactClaim'])) {
        $error['contactClaim'] = 'Veuillez renseigner le champ';
    };
}

$user = new User();

if (isset($_SESSION['user'])) {

    $getUserArray = $user->getUserInfos($_SESSION['user']['id_user']);
}

if (isset($_POST['contactSubmit']) && count($error) == 0) {

    $user = new User();

        $object = htmlspecialchars($_POST['contactObjet']);
        $claim = htmlspecialchars($_POST['contactClaim']);
        $userId = htmlspecialchars($_SESSION['user']['id_user']);

        $user->addContact($object, $claim, $userId);
}