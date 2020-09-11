<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_user.php';

$user = new User();

if (isset($_SESSION['user'])) {

    $getUserArray = $user->getUserInfos();
}

if (isset($_POST['validateSubmit'])) {

    $idUser = htmlspecialchars($_POST['validateSubmit']);

    $user->updateUserValidate($idUser);
    header('Location: ..\view\modoUser.php');
}

if (isset($_POST['modoSubmit'])) {

    $idUser = htmlspecialchars($_POST['modoSubmit']);

    $user->updateUserModerator($idUser);
    header('Location: ..\view\modoUser.php');
}

if (isset($_POST['deleteSubmit'])) {

    $idUser = ($_POST['deleteSubmit']);

    $user->deleteUserInfos($idUser);
    header('Location: ..\view\modoUser.php');
}