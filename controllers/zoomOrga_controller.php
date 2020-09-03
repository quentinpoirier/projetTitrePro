<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_user.php';
require_once '..\model\model_activity.php';

var_dump($_POST['orgaZoomSubmit']);