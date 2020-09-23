<?php

require_once '..\model\model_contact.php';

$contact = new Contact();

$getContactArray = $contact->getContactInfos();

if (isset($_GET['contact'])) {
    $getContactById = $contact->getContactInfoById(htmlspecialchars($_GET['contact']));
}

if (isset($_POST['deleteSubmit'])) {

    $idContact = ($_POST['deleteSubmit']);

    $contact->deleteContact($idContact);
    header('Location: ..\view\modoContact.php');
}