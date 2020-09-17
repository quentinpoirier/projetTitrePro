<?php

require_once '../controllers/userAdvert_controller.php';

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

    <div class="container-fluid pb-4 containerBg">
        <div class="row justify-content-end">
            <a class="btn navBg text-white mt-2 mr-4" href="..\view\createAdvert.php">Créer annonce</a>
        </div>
        <div class="row justify-content-center pb-1 pt-5">
            <div class="col h2 text-center textFont">Mes annonces</div>
        </div>

        <div class="row justify-content-center pb-5">
            <?php
            if (isset($_SESSION['user'])) {
                if (($getAdvertArray) == true) {
                    foreach ($getAdvertArray as $advert) {
            ?>
                        <div class="col-sm-3">
                            <form class="navBg p-4 rounded-0 textFont" action="" method="post" novalidate>
                                <div class="form-group">
                                    <label for="advertTitle" class="text-white">Titre</label>
                                    <input type="text" class="form-control " id="advertTitle" name="advertTitle" value="<?= isset($_POST['advertTitle']) ? htmlspecialchars($_POST['advertTitle']) : $advert['advert_title'] ?>">
                                    <span class="font-italic text-danger"><?= isset($error['advertTitle']) ? $error['advertTitle'] : '' ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="advertObject" class="text-white">Objet</label>
                                    <input type="text" class="form-control " id="advertObject" name="advertObject" value="<?= isset($_POST['advertObject']) ? htmlspecialchars($_POST['advertObject']) : $advert['advert_object'] ?>">
                                    <span class="font-italic text-danger"><?= isset($error['advertObject']) ? $error['advertObject'] : '' ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="advertDesc" class="text-white">Description</label>
                                    <textarea type="text" class="form-control" id="advertDesc" name="advertDesc" rows="3" value="<?= isset($_POST['advertDesc']) ? htmlspecialchars($_POST['advertDesc']) : '' ?>"><?= $advert['advert_desc'] ?></textarea>
                                    <span class="font-italic text-danger"><?= isset($error['advertDesc']) ? $error['advertDesc'] : '' ?></span>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="updateAdvertSubmit" id="updateAdvertSubmit" class="btn btn-light font-weight-bold mr-2" value="<?= $advert['id_advert'] ?>">Modifier</button>
                                    <button type="submit" name="deleteAdvertSubmit" id="deleteAdvertSubmit" class="btn btn-light font-weight-bold" value="<?= $advert['id_advert'] ?>">Supprimer</button>
                                </div>
                            </form>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div>Vous n'avez pas publié d'annonces</div>
            <?php
                }
            }
            ?>

        </div>
    </div>

    <?php include '..\include\include_footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>