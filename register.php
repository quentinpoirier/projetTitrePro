<?php

require_once 'assets\controllers\register_controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\styles.css">
    <title>Titre Pro</title>
    <style>

    </style>
</head>

<body>
    <header class="d-flex flex-row align-items-center justify-content-center bg-white header">
        <div class="d-flex">
            <div class="text-dark h2">TITRE & LOGO</div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-3">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="home.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="organization.php">Association</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="advert.php">Annonces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="user.php">Espace personnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <form class="form-inline">
            <div class="form-group mx-sm-3">
                <a class="btn btn-light text-uppercase font-weight-bold" href="login.php" role="button">Connexion</a>
            </div>
            <div class="form-group">
                <a class="btn btn-light text-uppercase font-weight-bold" href="register.php" role="button">Inscription</a>
            </div>
        </form>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col text-uppercase h2 text-dark text-center">inscription</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">

                    <form class="bg-dark p-4 rounded-lg" action="index.php" method="post" novalidate>
                        <div class="form-group">
                            <label for="userMail" class="text-white text-uppercase">Mail</label>
                            <input type="email" class="form-control" id="userMail" name="userMail" value="<?= isset($_POST['userMail']) ? htmlspecialchars($_POST['userMail']) : '' ?>">
                            <span><?= isset($error['userMail']) ? $error['userMail'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="text-white text-uppercase">Mot de passe</label>
                            <input type="password" class="form-control" id="userPassword" name="userPassword" value="<?= isset($_POST['userPassword']) ? htmlspecialchars($_POST['userPassword']) : '' ?>">
                            <span><?= isset($error['userPassword']) ? $error['userPassword'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="verifyPassword" class="text-white text-uppercase">Vérification mot de passe</label>
                            <input type="password" class="form-control" id="verifyPassword" name="verifyPassword" value="<?= isset($_POST['verifyPassword']) ? htmlspecialchars($_POST['verifyPassword']) : '' ?>">
                            <span><?= isset($error['verifyPassword']) ? $error['verifyPassword'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="userType" class="text-white text-uppercase">Status</label>
                            <select class="form-control" id="userType" name="userType">
                                <option selected disabled>--</option>
                                <option value="volunteer" <?= isset($_POST['userType']) && ($_POST['userType']) == 'volunteer'  ? 'selected' : '' ?>>Bénévole</option>
                                <option value="organization" <?= isset($_POST['userType']) && ($_POST['userType']) == 'organization'  ? 'selected' : '' ?>>Association</option>
                            </select>
                            <span><?= isset($error['userType']) ? $error['userType'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="volunteerFirstname" class="text-white text-uppercase">Prénom</label>
                            <input type="text" class="form-control" id="volunteerFirstname" name="volunteerFirstname" value="<?= isset($_POST['volunteerFirstname']) ? htmlspecialchars($_POST['volunteerFirstname']) : '' ?>">
                            <span><?= isset($error['volunteerFirstname']) ? $error['volunteerFirstname'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="volunteerLastname" class="text-white text-uppercase">Nom</label>
                            <input type="text" class="form-control" id="volunteerLastname" name="volunteerLastname" value="<?= isset($_POST['volunteerLastname']) ? htmlspecialchars($_POST['volunteerLastname']) : '' ?>">
                            <span><?= isset($error['volunteerLastname']) ? $error['volunteerLastname'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="volunteerBirthdate" class="text-white text-uppercase">Date de naissance</label>
                            <input type="date" class="form-control" id="volunteerBirthdate" name="volunteerBirthdate" value="<?= isset($_POST['volunteerBirthdate']) ? htmlspecialchars($_POST['volunteerBirthdate']) : '' ?>">
                            <span><?= isset($error['volunteerBirthdate']) ? $error['volunteerBirthdate'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="oragnizationName" class="text-white text-uppercase">Nom de la structure</label>
                            <input type="text" class="form-control" id="oragnizationName" name="oragnizationName" value="<?= isset($_POST['oragnizationName']) ? htmlspecialchars($_POST['oragnizationName']) : '' ?>">
                            <span><?= isset($error['oragnizationName']) ? $error['oragnizationName'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="activity" class="text-white text-uppercase">Domaine d'activité</label>
                            <select class="form-control" id="activity" name="activity">
                                <option selected disabled>--</option>
                                <option value="culture" <?= isset($_POST['activity']) && ($_POST['activity']) == 'volunteer'  ? 'selected' : '' ?>>Culture</option>
                                <option value="environment" <?= isset($_POST['activity']) && ($_POST['activity']) == 'organization'  ? 'selected' : '' ?>>Environnement</option>
                                <option value="social" <?= isset($_POST['activity']) && ($_POST['activity']) == 'volunteer'  ? 'selected' : '' ?>>Social</option>
                                <option value="sport" <?= isset($_POST['activity']) && ($_POST['activity']) == 'organization'  ? 'selected' : '' ?>>Sport</option>
                            </select>
                            <span><?= isset($error['activity']) ? $error['activity'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="organizationAdress" class="text-white text-uppercase">Adresse</label>
                            <input type="text" class="form-control" id="organizationAdress" name="organizationAdress" value="<?= isset($_POST['organizationAdress']) ? htmlspecialchars($_POST['organizationAdress']) : '' ?>">
                            <span><?= isset($error['organizationAdress']) ? $error['organizationAdress'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="organizationPhone" class="text-white text-uppercase">Téléphone</label>
                            <input type="text" class="form-control" id="organizationPhone" name="organizationPhone" value="<?= isset($_POST['organizationPhone']) ? htmlspecialchars($_POST['organizationPhone']) : '' ?>">
                            <span><?= isset($error['organizationPhone']) ? $error['organizationPhone'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="organizationMail" class="text-white text-uppercase">Mail de contact</label>
                            <input type="email" class="form-control" id="organizationMail" name="organizationMail" value="<?= isset($_POST['organizationMail']) ? htmlspecialchars($_POST['organizationMail']) : '' ?>">
                            <span><?= isset($error['organizationMail']) ? $error['organizationMail'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="organizationSiren" class="text-white text-uppercase">Numéro SIREN</label>
                            <input type="text" class="form-control" id="organizationSiren" name="organizationSiren" value="<?= isset($_POST['organizationSiren']) ? htmlspecialchars($_POST['organizationSiren']) : '' ?>">
                            <span><?= isset($error['organizationSiren']) ? $error['organizationSiren'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="organizationDesc" class="text-white text-uppercase">Description de la structure</label>
                            <textarea type="text" class="form-control" id="organizationDesc" name="organizationDesc" rows="3" required></textarea>
                            <span><?= isset($error['organizationDesc']) ? $error['organizationDesc'] : '' ?></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="registerSubmit" id="registerSubmit" class="btn btn-light text-uppercase font-weight-bold">S'inscrire</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <footer class="d-flex flex-row align-items-center justify-content-center bg-dark header mt-5">
        <div class="d-flex">
            <div class="text-white h4">mentions légales / contact / acceuil</div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>