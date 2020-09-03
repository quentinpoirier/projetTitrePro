<?php

require_once '..\controllers\login_controller.php';

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
            <span class="navbar-toggler-icon"></span>
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
        <form class="form-inline mb-1 mt-1">
            <div class="form-group mx-sm-3">
                <a class="btn btn-light text-uppercase font-weight-bold" href="" role="button">Connexion</a>
            </div>
            <div class="form-group">
                <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\register.php" role="button">Inscription</a>
            </div>
        </form>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col text-uppercase h2 text-dark text-center">login</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">

                    <form class="bg-dark p-4 rounded-lg" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="userMail" class="text-white text-uppercase">Mail</label>
                            <input type="email" class="form-control" id="userMail" name="userMail" value="<?= isset($_POST['userMail']) ? htmlspecialchars($_POST['userMail']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['userMail']) ? $error['userMail'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="text-white text-uppercase">Mot de passe</label>
                            <input type="password" class="form-control" id="userPassword" name="userPassword" value="<?= isset($_POST['userPassword']) ? htmlspecialchars($_POST['userPassword']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['userPassword']) ? $error['userPassword'] : '' ?></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="loginSubmit" id="loginSubmit" class="btn btn-light text-uppercase font-weight-bold mt-3">se connecter</button>
                        </div>
                        <span class="font-italic text-danger"><?= (isset($error['login'])) ? $error['login'] : '' ?></span>
                        <div class="text-center">
                            <a href="..\view\register.php" class="btn btn-light text-uppercase font-weight-bold mt-3" role="button" aria-pressed="true">s'inscrire</a>
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