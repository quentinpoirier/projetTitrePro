<?php

session_start();

require_once '..\model\model_user.php';
require_once '..\model\model_activity.php';

$user = new User();

$getOrgaArray = $user->getOrgaInfos();


$activity = new Activity();

$getActivityArray = $activity->getActivityInfos();