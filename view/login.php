<?php

require_once '..\controllers\login_controller.php';

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
                <div class="col h2 text-center textFont">Login</div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-sm-4">
                    <form class="p-4 rounded-0 textFont border" action="" method="post" novalidate>
                        <div class="form-group">
                            <label for="userMail" class="navText">Mail</label>
                            <input type="email" class="form-control" id="userMail" name="userMail" value="<?= isset($_POST['userMail']) ? htmlspecialchars($_POST['userMail']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['userMail']) ? $error['userMail'] : '' ?></span>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="navText">Mot de passe</label>
                            <input type="password" class="form-control" id="userPassword" name="userPassword" value="<?= isset($_POST['userPassword']) ? htmlspecialchars($_POST['userPassword']) : '' ?>">
                            <span class="font-italic text-danger"><?= isset($error['userPassword']) ? $error['userPassword'] : '' ?></span>
                        </div>
                        <span class="font-italic text-danger"><?= (isset($error['login'])) ? $error['login'] : '' ?></span>
                        <div class="text-center">
                            <button type="submit" name="loginSubmit" id="loginSubmit" class="btn btn-block navBg text-white font-weight-bold mt-3 mr-2">Se connecter</button>
                            <a href="..\view\register.php" class="btn btn-block font-weight-bold navBg text-white mt-3" role="button" aria-pressed="true">S'inscrire</a>
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