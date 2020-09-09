<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ..\view\login.php');
} else {
}

require_once '..\model\model_contact.php';

$contact = new Contact();

if (isset($_SESSION['user'])) {

    $getContactArray = $contact->getContactInfos();
}

if (isset($_POST['deleteSubmit'])) {

    $idContact = ($_POST['deleteSubmit']);

    $contact->deleteContact($idContact);
    header('Location: ..\view\modoContact.php');
}