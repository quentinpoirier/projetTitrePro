<?php

require_once '..\controllers\advert_controller.php';

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
                    <a class="nav-link text-white" href="">Annonces</a>
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

    <main>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col text-uppercase h2 text-dark text-center">annonces</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">

                    <form class="bg-dark p-4 rounded-lg" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="advertTitle" class="text-white text-uppercase">Titre</label>
                            <input type="text" class="form-control " id="advertTitle" name="advertTitle" value="<?= isset($_POST['advertTitle']) ? htmlspecialchars($_POST['advertTitle']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['advertTitle']) ? $error['advertTitle'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="advertObject" class="text-white text-uppercase">Objet</label>
                            <input type="text" class="form-control " id="advertObject" name="advertObject" value="<?= isset($_POST['advertObject']) ? htmlspecialchars($_POST['advertObject']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['advertObject']) ? $error['advertObject'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="advertDesc" class="text-white text-uppercase">Description</label>
                            <textarea type="text" class="form-control" id="advertDesc" name="advertDesc" rows="3" value="<?= isset($_POST['advertDesc']) ? htmlspecialchars($_POST['advertDesc']) : '' ?>"></textarea>
                            <span class="font-italic text-danger"><?= isset($error['advertDesc']) ? $error['advertDesc'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="advertDateStart" class="text-white text-uppercase">Date de début</label>
                            <input type="date" class="form-control" id="advertDate" name="advertDate" value="<?= isset($_POST['advertDate']) ? htmlspecialchars($_POST['advertDate']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['advertDate']) ? $error['advertDate'] : '' ?></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="advertSubmit" id="advertSubmit" class="btn btn-light text-uppercase font-weight-bold">Poster</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row">
                <div class="col text-uppercase h4 text-dark text-center">bénévoles</div>
            </div>
            <div class="row">
                <?php
                foreach ($getAdvertArray as $advert) {
                    if ($advert['id_usertypes'] == 1) {
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
                                    <div class="card-title"><?= $advert['advert_title'] ?></div>
                                    <div class="card-subtitle"><?= $advert['advert_object'] ?></div>
                                    <div class="card-text"><?= $advert['advert_desc'] ?></div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-dark"><?= $advert['advert_date'] ?></li>
                                    <li class="list-group-item bg-dark"><?= $advert['user_mail'] ?></li>
                                    <li class="list-group-item bg-dark"><?= $advert['volunteer_firstname'] . '  ' . $advert['volunteer_lastname'] ?></li>
                                </ul>
                                <div class="card-body">
                                    <button type="submit" name="orgaZoomSubmit" id="orgaZoomSubmit" class="btn btn-light text-uppercase font-weight-bold">détail</button>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <div class="row">
                <div class="col text-uppercase h4 text-dark text-center">associations</div>
            </div>
            <div class="row">
                <?php
                foreach ($getAdvertArray as $advert) {
                    if ($advert['id_usertypes'] == 2) {
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
                                    <div class="card-title"><?= $advert['advert_title'] ?></div>
                                    <div class="card-subtitle"><?= $advert['advert_object'] ?></div>
                                    <div class="card-text"><?= $advert['advert_desc'] ?></div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-dark"><?= $advert['advert_date'] ?></li>
                                    <li class="list-group-item bg-dark"><?= $advert['organization_mail'] ?></li>
                                    <li class="list-group-item bg-dark"><?= $advert['organization_name'] ?></li>
                                    <li class="list-group-item bg-dark"><?= $advert['activity_name'] ?></li>
                                </ul>
                                <div class="card-body">
                                    <button type="submit" name="orgaZoomSubmit" id="orgaZoomSubmit" class="btn btn-light text-uppercase font-weight-bold">détail</button>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
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