<?php

session_start();

require_once '..\model\model_user.php';
require_once '..\model\model_activity.php';

$user = new User();

if (isset($_SESSION['user'])) {

    $getOrgaArray = $user->getOrgaInfos();
}

$activity = new Activity();

if (isset($_SESSION['user'])) {

    $getActivityArray = $activity->getActivityInfos();
}