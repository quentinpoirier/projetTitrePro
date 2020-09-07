<?php

require_once '..\controllers\modoAdvert_controller.php';

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
    <?php include '..\include\include_header.php' ?>

    <?php include '..\include\include_navbar.php' ?>

    <main>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col text-uppercase h2 text-dark text-center">annonces</div>
            </div>

            <div class="row justify-content-center mb-3 pb-1">
                <div class="col-sm-4 card w-100 shadow rounded">
                    <form class="mb-3 bg-light p-5" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="activity" class="text-secondary text-center font-weight-bold">Domaine d'activité</label>
                            <select class="form-control" id="activity" name="activity">
                                <?php
                                foreach ($getActivityArray as $activity) {
                                ?>
                                    <option value="<?= $activity['activity_name'] ?>"><?= $activity['activity_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="selectOrgaSubmit" id="selectOrgaSubmit" class="btn btn-light text-uppercase font-weight-bold">modifier</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col text-uppercase h4 text-dark text-center">associations</div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST['selectOrgaSubmit'])) {
                    foreach ($getAdvertArray as $advert) {
                        if ($advert['id_usertypes'] == 2) {
                            if ($advert['activity_name'] == $_POST['activity']) {
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
                    }
                } else {
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
                                        <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">Détails</a>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
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
                                    <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">Détails</a>
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

    <?php include '..\include\include_footer.php' ?>

</body>

</html>