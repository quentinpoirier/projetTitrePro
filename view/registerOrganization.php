<?php

require_once '..\controllers\registerOrganization_controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="..\assets\css\styles.css">
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
            <span class="font-italic text-danger" class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="..\index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="..\view\organization.php">Association</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="..\view\advert.php">Annonces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="..\view\user.php">Espace personnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="..\view\contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <form class="form-inline">
            <div class="form-group mx-sm-3">
                <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\login.php" role="button">Connexion</a>
            </div>
            <div class="form-group">
                <a class="btn btn-light text-uppercase font-weight-bold" href="" role="button">Inscription</a>
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

                    <?php
                    if ($registerSuccess) { ?>
                        <div>
                            <h1>Bravo vous êtes inscris</h1>
                        </div>
                        <div>
                            <a href="index.php">Se connecter</a>
                        </div>
                    <?php } else { ?>
                        <form class="bg-dark p-4 rounded-lg" action="" method="post" novalidate>
                            <div class="form-group">
                                <label for="oragnizationName" class="text-white text-uppercase">Nom de la structure</label>
                                <input type="text" class="form-control" id="oragnizationName" name="oragnizationName" value="<?= isset($_POST['oragnizationName']) ? htmlspecialchars($_POST['oragnizationName']) : '' ?>">
                                <span class="font-italic text-danger"><?= isset($error['oragnizationName']) ? $error['oragnizationName'] : '' ?></span>
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
                                <span class="font-italic text-danger"><?= isset($error['activity']) ? $error['activity'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="organizationAdress" class="text-white text-uppercase">Adresse</label>
                                <input type="text" class="form-control" id="organizationAdress" name="organizationAdress" value="<?= isset($_POST['organizationAdress']) ? htmlspecialchars($_POST['organizationAdress']) : '' ?>">
                                <span class="font-italic text-danger"><?= isset($error['organizationAdress']) ? $error['organizationAdress'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="organizationPhone" class="text-white text-uppercase">Téléphone</label>
                                <input type="text" class="form-control" id="organizationPhone" name="organizationPhone" value="<?= isset($_POST['organizationPhone']) ? htmlspecialchars($_POST['organizationPhone']) : '' ?>">
                                <span class="font-italic text-danger"><?= isset($error['organizationPhone']) ? $error['organizationPhone'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="organizationMail" class="text-white text-uppercase">Mail de contact</label>
                                <input type="email" class="form-control" id="organizationMail" name="organizationMail" value="<?= isset($_POST['organizationMail']) ? htmlspecialchars($_POST['organizationMail']) : '' ?>">
                                <span class="font-italic text-danger"><?= isset($error['organizationMail']) ? $error['organizationMail'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="organizationSiren" class="text-white text-uppercase">Numéro SIREN</label>
                                <input type="text" class="form-control" id="organizationSiren" name="organizationSiren" value="<?= isset($_POST['organizationSiren']) ? htmlspecialchars($_POST['organizationSiren']) : '' ?>">
                                <span class="font-italic text-danger"><?= isset($error['organizationSiren']) ? $error['organizationSiren'] : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="organizationDesc" class="text-white text-uppercase">Description de la structure</label>
                                <textarea type="text" class="form-control" id="organizationDesc" name="organizationDesc" rows="3" required></textarea>
                                <span class="font-italic text-danger"><?= isset($error['organizationDesc']) ? $error['organizationDesc'] : '' ?></span>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="registerSubmit" id="registerSubmit" class="btn btn-light text-uppercase font-weight-bold">S'inscrire</button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="d-flex flex-row align-items-center justify-content-center bg-dark header mt-5">
        <div class="d-flex">
            <div class="text-white h4">mentions légales / contact / acceuil</div>
        </div>
    </footer>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>