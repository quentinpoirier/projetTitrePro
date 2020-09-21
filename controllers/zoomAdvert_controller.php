<?php

session_start();

require_once '..\model\model_advert.php';

$advert = new Advert();

$getAdvertArray = $advert->getAdvert();

if (isset($_GET['advert'])) {
    $getAdvertById = $advert->getAdvertById(htmlspecialchars($_GET['advert']));
}