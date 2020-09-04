<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_advert.php';
require_once '..\model\model_activity.php';

$advert = new Advert();

if (isset($_SESSION['user'])) {

    $getAdvertArray = $advert->getAdvert();
}

$activity = new Activity();

if (isset($_SESSION['user'])) {

    $getActivityArray = $activity->getActivityInfos();
}