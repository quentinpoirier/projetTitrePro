<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
}

if (isset($_POST['validateSubmit'])) {

    session_destroy();

    header('Location: ..\index.php');
}

if (isset($_POST['declineSubmit'])) {

    header('Location: ..\index.php');
}