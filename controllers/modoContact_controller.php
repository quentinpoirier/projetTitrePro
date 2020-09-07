<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_user.php';

$user = new User();

if (isset($_SESSION['user'])) {

    $getContactArray = $user->getContactInfos();
}