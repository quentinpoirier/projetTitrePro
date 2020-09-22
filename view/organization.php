<?php

require_once '..\controllers\organization_controller.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="..\assets\css\styles.css">
    <title>Titre Pro</title>
</head>

<body>
    <?php include '..\include\include_header.php' ?>

    <?php include '..\include\include_navbar.php' ?>

    <main>
        <div class="container-fluid containerBg">
            <div class="row justify-content-start pt-3 pb-3">
                <div class="col-sm-3 card w-100 shadow rounded-0 ml-3">
                    <form class="pb-2 pt-2" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="activity" class="text-center h6 font-weight-bold textFont">Domaine d'activité</label>
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
                        <div class="">
                            <button type="submit" name="selectOrgaSubmit" id="selectOrgaSubmit" class="btn font-weight-bold cardOrga textFont">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_POST['selectOrgaSubmit'])) {
                    foreach ($getOrgaArray as $user) {
                        if ($user['activity_name'] == $_POST['activity'] && $user['user_validate'] == 1) { ?>
                            <div class="col-sm-3 mb-4">
                                <div class="card w-100 shadow rounded-0 cardOrga">
                                    <div class="text-center mt-2">
                                        <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                                        </svg>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title text-uppercase font-weight-bold"><?= $user['organization_name'] ?></div>
                                        <div class="card-text textFont"><?= $user['organization_desc'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $user['organization_mail'] ?></li>
                                        <li class="list-group-item font-italic"><?= $user['organization_phone'] ?></li>
                                    </ul>
                                    <div class="card-body">
                                        <a class="btn btn-light font-weight-bold textFont" href="../view/zoomUser.php?user=<?= $user['id_user'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                                                <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                } else {
                    foreach ($getOrgaArray as $user) {
                        if ($user['user_validate'] == 1) {
                        ?>
                            <div class="col-sm-3 mb-4">
                                <div class="card w-100 shadow rounded-0 cardOrga">
                                    <div class="text-center mt-2">
                                        <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                                        </svg>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title text-uppercase font-weight-bold"><?= $user['organization_name'] ?></div>
                                        <div class="card-text textFont"><?= $user['organization_desc'] ?></div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item font-italic"><?= $user['organization_mail'] ?></li>
                                        <li class="list-group-item font-italic"><?= $user['organization_phone'] ?></li>
                                    </ul>
                                    <div class="card-body">
                                        <a class="btn btn-light font-weight-bold textFont" href="../view/zoomUser.php?user=<?= $user['id_user'] ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                                                <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
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
        </div>
    </main>

    <?php include '..\include\include_footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>