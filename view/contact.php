<?php

require_once '..\controllers\contact_controller.php';

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
        <div class="container-fluid pb-4 containerBg">
            <div class="row justify-content-center pb-1 pt-5">
                <div class="col h2 text-center textFont">Contact</div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-sm-4">

                    <form class="p-4 rounded-0 textFont border" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="contactObjet" class="navText">object</label>
                            <input type="text" class="form-control" id="contactObjet" name="contactObjet" value="<?= isset($_POST['contactObjet']) ? htmlspecialchars($_POST['contactObjet']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['contactObjet']) ? $error['contactObjet'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="contactClaim" class="navText">réclamation</label>
                            <textarea type="password" class="form-control" id="contactClaim" name="contactClaim" rows="3" value="<?= isset($_POST['contactClaim']) ? htmlspecialchars($_POST['contactClaim']) : '' ?>"></textarea>
                            <span class="font-italic text-danger"><?= isset($error['contactClaim']) ? $error['contactClaim'] : '' ?></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="contactSubmit" id="contactSubmit" class="btn btn-block navBg text-white font-weight-bold mt-3">poster</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <?php include '..\include\include_footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>