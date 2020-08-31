<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_user.php';

$error = array();

$longString = '/^[a-zA-ZéèêëiîïôöüäçÉÀÂÛÔÎÙÈÊ\" -,!.;:?()]{20,500}$/';
$DateRegex = "/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/";

if (isset($_POST['advertTitle'])) {
    if (preg_match($longString, $_POST['advertTitle']) == false) {
        $error['advertTitle'] = 'Mauvais format';
    };
    if (empty($_POST['advertTitle'])) {
        $error['advertTitle'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['advertObject'])) {
    if (preg_match($longString, $_POST['advertObject']) == false) {
        $error['advertObject'] = 'Mauvais format';
    };
    if (empty($_POST['advertObject'])) {
        $error['advertObject'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['advertDesc'])) {
    if (empty($_POST['advertDesc'])) {
        $error['advertDesc'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['advertDateStart'])) {
    if (preg_match($DateRegex, $_POST['advertDateStart']) == false) {
        $error['advertDateStart'] = 'Mauvais format';
    };
    if (empty($_POST['advertDateStart'])) {
        $error['advertDateStart'] = 'Veuillez renseigner le champ';
    };
}