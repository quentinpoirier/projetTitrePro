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
    <?php include '..\include\include_header.php' ?>

    <?php include '..\include\include_navbar.php' ?>

    <main>
        <div class="container-fluid containerBg">
            <div class="row justify-content-start pt-3">
                <div class="col-sm-3 card w-100 shadow rounded-0 ml-3">
                    <form class="pb-2 pt-2" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="activity" class="text-center h6 font-weight-bold textFont">Domaine d'activité</label>
                            <select class="form-control" id="activity" name="activity">
                                <?php
                                foreach ($getActivityArray as $activity) {
                                ?>
                                    <option class="navText" value="<?= $activity['activity_name'] ?>"><?= $activity['activity_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <button type="submit" name="selectOrgaSubmit" id="selectOrgaSubmit" class="btn cardOrga font-weight-bold mr-2 textFont">Rechercher</button>
                            <a class="btn cardOrga font-weight-bold textFont" href="..\view\createAdvert.php">créer annonce</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col text-uppercase h4 text-dark text-center">associations</div>
            </div>
            <hr>
            <div class="row">
                <?php
                if (isset($_POST['selectOrgaSubmit'])) {
                    foreach ($getAdvertArray as $advert) {
                        if ($advert['id_usertypes'] == 2 && $advert['advert_validate'] == 1) {
                            if ($advert['activity_name'] == $_POST['activity']) {
                ?>
                                <div class="col-sm-4 mb-4">
                                    <div class="card w-100 shadow rounded-0 cardOrga">
                                        <div class="text-center mt-2">
                                            <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                                            </svg>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-title h4"><?= $advert['advert_title'] ?></div>
                                            <div class="card-subtitle h5"><?= $advert['advert_object'] ?></div>
                                            <div class="card-text textFont"><?= $advert['advert_desc'] ?></div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item font-italic"><?= $advert['organization_name'] ?></li>
                                            <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                            <li class="list-group-item font-italic"><?= $advert['organization_mail'] ?></li>
                                        </ul>
                                        <div class="card-body">
                                            <button type="submit" name="orgaZoomSubmit" id="orgaZoomSubmit" class="btn btn-light font-weight-bold textFont">détail</button>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    }
                } else {
                    foreach ($getAdvertArray as $advert) {
                        if ($advert['id_usertypes'] == 2 && $advert['advert_validate'] == 1) {
                            ?>
                            <div class="col-sm-4 mb-4">
                                <div class="card w-100 shadow rounded-0 cardOrga">
                                    <div class="text-center mt-2">
                                        <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                                        </svg>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title h4"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle h5"><?= $advert['advert_object'] ?></div>
                                        <div class="card-text textFont"><?= $advert['advert_desc'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $advert['organization_name'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['organization_mail'] ?></li>
                                    </ul>
                                    <div class="card-body">
                                        <a class="btn btn-light font-weight-bold textFont" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">Détails</a>
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
            <hr>
            <div class="row">
                <?php
                foreach ($getAdvertArray as $advert) {
                    if ($advert['id_usertypes'] == 1 && $advert['advert_validate'] == 1) {
                ?>
                        <div class="col-sm-4 mb-4">
                            <div class="card w-100 shadow rounded-0 cardVolunteer">
                                <div class="text-center mt-2">
                                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                                    </svg>
                                </div>
                                <div class="card-body">
                                    <div class="card-title h4"><?= $advert['advert_title'] ?></div>
                                    <div class="card-subtitle h5"><?= $advert['advert_object'] ?></div>
                                    <div class="card-text textFont"><?= $advert['advert_desc'] ?></div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                    <li class="list-group-item font-italic"><?= $advert['user_mail'] ?></li>
                                    <li class="list-group-item font-italic"><?= $advert['volunteer_firstname'] . '  ' . $advert['volunteer_lastname'] ?></li>
                                </ul>
                                <div class="card-body">
                                    <a class="btn btn-light font-weight-bold textFont" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">Détails</a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>