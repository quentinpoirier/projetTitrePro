<?php

session_start();

require_once '..\model\model_user.php';

$user = new User();

$getOrgaArray = $user->getOrgaInfos();

if (isset($_GET['organization'])) {
    $getOrgaById = $user->getOrgaInfosById(htmlspecialchars($_GET['organization']));
}