<?php

require_once '..\controllers\registerVolunteer_controller.php';

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
        <div class="container-fluid pb-4">
            <div class="row justify-content-center pb-1 pt-5">
                <div class="col h2 text-center textFont">Inscription</div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-sm-4">

                    <form class="p-4 rounded-0 textFont border" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="volunteerFirstname" class="navText ">Prénom</label>
                            <input type="text" class="form-control" id="volunteerFirstname" name="volunteerFirstname" value="<?= isset($_POST['volunteerFirstname']) ? htmlspecialchars($_POST['volunteerFirstname']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['volunteerFirstname']) ? $error['volunteerFirstname'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="volunteerLastname" class="navText ">Nom</label>
                            <input type="text" class="form-control" id="volunteerLastname" name="volunteerLastname" value="<?= isset($_POST['volunteerLastname']) ? htmlspecialchars($_POST['volunteerLastname']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['volunteerLastname']) ? $error['volunteerLastname'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="volunteerBirthdate" class="navText ">Date de naissance</label>
                            <input type="date" class="form-control" id="volunteerBirthdate" name="volunteerBirthdate" value="<?= isset($_POST['volunteerBirthdate']) ? htmlspecialchars($_POST['volunteerBirthdate']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['volunteerBirthdate']) ? $error['volunteerBirthdate'] : '' ?></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="registerSubmit" id="registerSubmit" class="btn btn-block navBg text-white font-weight-bold">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include '..\include\include_footer.php' ?>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>