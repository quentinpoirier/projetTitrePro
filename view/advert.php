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
                            <?php
                            if (isset($_SESSION['user'])) {
                            ?>
                                <a class="btn cardOrga font-weight-bold textFont" href="..\view\createAdvert.php">créer annonce</a>
                            <?php
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col text-uppercase h4 text-center textFont">associations</div>
            </div>
            <hr>
            <div class="row">
                <?php
                if (isset($_POST['selectOrgaSubmit'])) {
                    foreach ($getAdvertArray as $advert) {
                        if ($advert['id_usertypes'] == 2 && $advert['advert_validate'] == 1) {
                            if ($advert['activity_name'] == $_POST['activity']) {
                ?>
                                <div class="col-sm-3 mb-4">
                                    <div class="card w-100 shadow rounded-0 cardOrga">
                                        <div class="text-center mt-2">
                                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-stickies-fill text-white mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z" />
                                                <path fill-rule="evenodd" d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z" />
                                            </svg>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-title h4"><?= $advert['advert_title'] ?></div>
                                            <div class="card-subtitle h5"><?= $advert['advert_object'] ?></div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item font-italic"><?= $advert['organization_name'] ?></li>
                                            <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                        </ul>
                                        <div class="card-body">
                                            <button type="submit" name="orgaZoomSubmit" id="orgaZoomSubmit" class="btn btn-light font-weight-bold textFont">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                </svg>
                                            </button>
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
                            <div class="col-sm-3 mb-4">
                                <div class="card w-100 shadow rounded-0 cardOrga">
                                    <div class="text-center mt-2">
                                        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-stickies-fill text-white mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z" />
                                            <path fill-rule="evenodd" d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z" />
                                        </svg>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title h4"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle h5"><?= $advert['advert_object'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $advert['organization_name'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                    </ul>
                                    <div class="card-body">
                                        <a class="btn btn-light font-weight-bold textFont" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                            </svg>
                                        </a>
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
                <div class="col text-uppercase h4 text-center textFont">bénévoles</div>
            </div>
            <hr>
            <div class="row">
                <?php
                foreach ($getAdvertArray as $advert) {
                    if ($advert['id_usertypes'] == 1 && $advert['advert_validate'] == 1) {
                ?>
                        <div class="col-sm-3 mb-4">
                            <div class="card w-100 shadow rounded-0 cardVolunteer">
                                <div class="text-center mt-2">
                                    <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-stickies-fill text-white mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z" />
                                        <path fill-rule="evenodd" d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z" />
                                    </svg>
                                </div>
                                <div class="card-body">
                                    <div class="card-title h4"><?= $advert['advert_title'] ?></div>
                                    <div class="card-subtitle h5"><?= $advert['advert_object'] ?></div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                    <li class="list-group-item font-italic"><?= $advert['volunteer_firstname'] . '  ' . $advert['volunteer_lastname'] ?></li>
                                </ul>
                                <div class="card-body">
                                    <a class="btn btn-light font-weight-bold textFont" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                        </svg>
                                    </a>
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