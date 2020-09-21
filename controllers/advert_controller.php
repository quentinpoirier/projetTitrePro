<?php

session_start();

require_once '..\model\model_advert.php';
require_once '..\model\model_activity.php';

$advert = new Advert();

$getAdvertArray = $advert->getAdvert();

$activity = new Activity();

$getActivityArray = $activity->getActivityInfos();