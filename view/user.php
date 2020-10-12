<?php

require_once '..\controllers\user_controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="..\assets\css\styles.css">
    <link rel="icon" type="image/gif" href="..\assets\img\logocouleur.png"/>
    <title>Mon profil</title>
    <style>

    </style>
</head>

<body>
    <?php include '..\include\include_header.php' ?>
    
    <?php include '..\include\include_navbar.php' ?>

    <main>
        <div class="container-fluid pb-4 containerBg">
            <div class="row justify-content-center pb-1 pt-5">
                <div class="col h4 text-center textFont text-uppercase">Mon espace</div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-sm-4">
                    <form class="p-4 rounded-0 textFont border" action="" method="post" novalidate>
                        <?php
                        if (isset($_SESSION['user'])) {
                            if ($_SESSION['user']['id_usertypes'] == '1') {
                                foreach ($getUserArray as $user) { ?>
                                    <div class="form-group">
                                        <label for="volunteerFirstname" class="navText">Prénom</label>
                                        <input type="text" class="form-control" id="volunteerFirstname" name="volunteerFirstname" value="<?= isset($_POST['volunteerFirstname']) ? htmlspecialchars($_POST['volunteerFirstname']) : $getUserArray[0]['volunteer_firstname'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['volunteerFirstname']) ? $error['volunteerFirstname'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="volunteerLastname" class="navText">Nom</label>
                                        <input type="text" class="form-control" id="volunteerLastname" name="volunteerLastname" value="<?= isset($_POST['volunteerLastname']) ? htmlspecialchars($_POST['volunteerLastname']) : $getUserArray[0]['volunteer_lastname'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['volunteerLastname']) ? $error['volunteerLastname'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="volunteerBirthdate" class="navText">Date de naissance</label>
                                        <input type="date" class="form-control" id="volunteerBirthdate" name="volunteerBirthdate" value="<?= isset($_POST['volunteerBirthdate']) ? htmlspecialchars($_POST['volunteerBirthdate']) : $getUserArray[0]['volunteer_age'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['volunteerBirthdate']) ? $error['volunteerBirthdate'] : '' ?></span>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php } else {
                                foreach ($getUserArray as $user) {
                                ?>
                                    <div class="form-group">
                                        <label for="oragnizationName" class="navText">Nom de la structure</label>
                                        <input type="text" class="form-control" id="oragnizationName" name="oragnizationName" value="<?= isset($_POST['oragnizationName']) ? htmlspecialchars($_POST['oragnizationName']) : $getUserArray[0]['organization_name'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['oragnizationName']) ? $error['oragnizationName'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="activity" class="navText">Domaine d'activité</label>
                                        <select class="form-control" id="activity" name="activity">
                                            <option selected disabled><?= $getUserArray[0]['activity_name'] ?></option>
                                            <option value="1" <?= isset($_POST['activity']) && ($_POST['activity']) == '1'  ? 'selected' : '' ?>>Culture</option>
                                            <option value="2" <?= isset($_POST['activity']) && ($_POST['activity']) == '2'  ? 'selected' : '' ?>>Environnement</option>
                                            <option value="3" <?= isset($_POST['activity']) && ($_POST['activity']) == '3'  ? 'selected' : '' ?>>Social</option>
                                            <option value="4" <?= isset($_POST['activity']) && ($_POST['activity']) == '4'  ? 'selected' : '' ?>>Sport</option>
                                        </select>
                                        <span class="font-italic text-danger"><?= isset($error['activity']) ? $error['activity'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="organizationAdress" class="navText">Adresse</label>
                                        <input type="text" class="form-control" id="organizationAdress" name="organizationAdress" value="<?= isset($_POST['organizationAdress']) ? htmlspecialchars($_POST['organizationAdress']) : $getUserArray[0]['organization_adress'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['organizationAdress']) ? $error['organizationAdress'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="organizationPhone" class="navText">Téléphone</label>
                                        <input type="text" class="form-control" id="organizationPhone" name="organizationPhone" value="<?= isset($_POST['organizationPhone']) ? htmlspecialchars($_POST['organizationPhone']) : $getUserArray[0]['organization_phone'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['organizationPhone']) ? $error['organizationPhone'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="organizationMail" class="navText">Mail de contact</label>
                                        <input type="email" class="form-control" id="organizationMail" name="organizationMail" value="<?= isset($_POST['organizationMail']) ? htmlspecialchars($_POST['organizationMail']) : $getUserArray[0]['organization_mail'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['organizationMail']) ? $error['organizationMail'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="organizationSiren" class="navText">Numéro SIREN</label>
                                        <input type="text" class="form-control" id="organizationSiren" name="organizationSiren" value="<?= isset($_POST['organizationSiren']) ? htmlspecialchars($_POST['organizationSiren']) : $getUserArray[0]['organization_siren'] ?>">
                                        <span class="font-italic text-danger"><?= isset($error['organizationSiren']) ? $error['organizationSiren'] : '' ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="organizationDesc" class="navText">Description de la structure</label>
                                        <textarea type="text" class="form-control" id="organizationDesc" name="organizationDesc" rows="3" required><?= isset($_POST['organizationDesc']) ? htmlspecialchars($_POST['organizationDesc']) : $getUserArray[0]['organization_desc'] ?></textarea>
                                        <span class="font-italic text-danger"><?= isset($error['organizationDesc']) ? $error['organizationDesc'] : '' ?></span>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>
                        <div class="text-center">
                            <button type="submit" name="updateUserSubmit" id="updateUserSubmit" class="btn btn-block navBg text-white font-weight-bold mt-3">Modifier</button>
                            <button type="submit" name="deleteUserSubmit" id="deleteUserSubmit" class="btn btn-block navBg text-white font-weight-bold">Supprimer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include '..\include\include_footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>