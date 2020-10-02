<?php

require_once '..\controllers\zoomAdvert_controller.php';

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
        <div class="container-fluid containerBg">
            <div class="row justify-content-center pt-3 pb-3">
                <?php
                if (isset($_GET['advert'])) {
                    foreach ($getAdvertById as $advert) {
                        if ($advert['id_usertypes'] == 1) {
                ?>
                            <div class="col-sm-8 mb-4">
                                <div class="card w-100 shadow rounded-0 cardVolunteer">
                                    <div class="card-body">
                                        <div class="card-title text-uppercase font-weight-bold"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle textFont font-weight-bold"><?= $advert['advert_object'] ?></div>
                                        <div class="card-text textFont"><?= $advert['advert_desc'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['user_mail'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['volunteer_firstname'] . '  ' . $advert['volunteer_lastname'] ?></li>
                                    </ul>
                                    <a href="mailto:<?= $advert['user_mail'] ?>" class="btn btn-light textOrga">
                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chat-square-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-sm-8 mb-4">
                                <div class="card w-100 shadow rounded-0 cardOrga">
                                    <div class="card-body">
                                        <div class="card-title text-uppercase font-weight-bold"><?= $advert['advert_title'] ?></div>
                                        <div class="card-subtitle textFont font-weight-bold"><?= $advert['advert_object'] ?></div>
                                        <div class="card-text textFont"><?= $advert['advert_desc'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $advert['advert_date'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['organization_mail'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['organization_name'] ?></li>
                                        <li class="list-group-item font-italic"><?= $advert['activity_name'] ?></li>
                                    </ul>
                                    <a href="mailto:<?= $advert['organization_mail'] ?>" class="btn btn-light textOrga">
                                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chat-square-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                <?php
                        }
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