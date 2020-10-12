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
    <link rel="icon" type="image/gif" href="..\assets\img\logocouleur.png"/>
    <title>Modération annonces</title>
</head>

<body>
    <?php include '..\include\include_header.php' ?>

    <?php include '..\include\include_navbar.php' ?>

    <main>
        <div class="container-fluid containerBg">
            <div class="row">
                <div class="col text-uppercase h4 textFont text-center pt-5">En attente</div>
            </div>
            <div class="row mt-2 justify-content-center">
                <?php
                if (($getAdvertArray) == true) {
                foreach ($getAdvertArray as $advert) {
                    if ($advert['advert_validate'] == 0) {
                ?>
                        <div class="col-sm-2 mb-4">
                            <div class="card w-100 shadow rounded-0 cardOrga">
                                <div class="text-center mt-2">
                                    <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-stickies-fill text-white mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z" />
                                        <path fill-rule="evenodd" d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z" />
                                    </svg>
                                </div>
                                <?php
                                if ($advert['id_usertypes'] == 2) {
                                ?>
                                    <div class="card-body">
                                        <div class="card-title h4 text-truncate"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle textFont text-truncate"><?= $advert['advert_object'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic text-truncate"><?= $advert['organization_name'] ?></li>
                                        <li class="list-group-item font-italic text-truncate"><?= $advert['advert_date'] ?></li>
                                    </ul>
                                <?php
                                } else {
                                ?>
                                    <div class="card-body">
                                        <div class="card-title h4 text-truncate"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle textFont text-truncate"><?= $advert['advert_object'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic text-truncate"><?= $advert['volunteer_firstname'] . ' ' . $advert['volunteer_lastname'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                    </ul>
                                <?php
                                }
                                ?>
                                <div class="card-body">
                                    <form method="post" action="">
                                        <button type="submit" name="validateSubmit" id="validateSubmit" class="btn btn-light textFont" value="<?= $advert['id_advert'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                        </button>
                                        <a class="btn btn-light font-weight-bold textFont" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                            </svg>
                                        </a>
                                        <button type="submit" name="deleteSubmit" id="deleteSubmit" class="btn btn-light textFont" value="<?= $advert['id_advert'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
            } else {
                ?>
                <div class="mb-3">Aucune annonce en attente de validation</div>
                <?php
                }
                ?>
            </div>
            <hr>
            <div class="row">
                <div class="col text-uppercase h4 textFont text-center">Validés</div>
            </div>
            <div class="row justify-content-center">
                <?php
                if (($getAdvertArray) == true) {
                foreach ($getAdvertArray as $advert) {
                    if ($advert['advert_validate'] == 1) {
                ?>
                        <div class="col-sm-2 mb-4">
                            <div class="card w-100 shadow rounded-0 cardOrga">
                                <div class="text-center mt-2">
                                    <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-stickies-fill text-white mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z" />
                                        <path fill-rule="evenodd" d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z" />
                                    </svg>
                                </div>
                                <?php
                                if ($advert['id_usertypes'] == 2) {
                                ?>
                                    <div class="card-body">
                                        <div class="card-title h4 text-truncate"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle textFont text-truncate"><?= $advert['advert_object'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $advert['organization_name'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                    </ul>
                                <?php
                                } else {
                                ?>
                                    <div class="card-body">
                                        <div class="card-title h4 text-truncate"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle textFont text-truncate"><?= $advert['advert_object'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $advert['volunteer_firstname'] . ' ' . $advert['volunteer_lastname'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                    </ul>
                                <?php
                                }
                                ?>
                                <div class="card-body">
                                    <form method="post" action="">        
                                        <a class="btn btn-light font-weight-bold textFont" href="..\view\zoomAdvert.php?advert=<?= $advert['id_advert'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                            </svg>
                                        </a>
                                        <button type="submit" name="deleteSubmit" id="deleteSubmit" class="btn btn-light textFont" value="<?= $advert['id_advert'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
            } else {
                ?>
                    <div class="mb-4">Aucune annonce validées</div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>