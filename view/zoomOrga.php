<?php

require_once '..\controllers\zoomOrga_controller.php';
var_dump($getOrgaArray);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="..\assets\css\styles.css">
    <title>Document</title>
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
                <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\login.php" role="button">Connexion</a>
            </div>
            <div class="form-group">
                <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\register.php" role="button">Inscription</a>
            </div>
        </form>
    </nav>

    <div class="row">
        <?php
        if (isset($_GET['annonces'])) {
        foreach ($getOrgaById as $user) {
        ?>
        <div class="col-sm-4 mb-4">
            <div class="card w-100 shadow rounded bg-dark text-white">
                <div class="text-center mt-2">
                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                    </svg>
                </div>
                <div class="card-body">
                    <div class="card-title"><?= $user['organization_name'] ?></div>
                    <div class="card-text"><?= $user['organization_desc'] ?></div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark"><?= $user['organization_mail'] ?></li>
                    <li class="list-group-item bg-dark"><?= $user['organization_phone'] ?></li>
                    <li class="list-group-item bg-dark"><?= $user['activity_name'] ?></li>
                </ul>
            </div>
        </div>
        <?php
        } 
    }
        ?>
    </div>

    <footer class="d-flex flex-row align-items-center justify-content-center bg-dark header mt-5">
        <div class="d-flex">
            <div class="text-white h4">mentions légales / contact / acceuil</div>
        </div>
    </footer>

</body>

</html>