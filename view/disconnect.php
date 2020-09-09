<?php

require_once '..\controllers\disconnect_controller.php';
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

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
        <div class="row justify-content-center">
            <div class="col-sm-4 mb-4">
                <div class="card w-100 shadow rounded bg-dark text-white">
                    <div class="card-body">
                        <div class="card-title text-uppercase">déconnection</div>
                        <div class="card-subtitle">Se déconnecter ?</div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <button type="submit" name="validateSubmit" id="validateSubmit" class="btn btn-light text-uppercase font-weight-bold mr-2">valider</button>
                            <button type="submit" name="declineSubmit" id="declineSubmit" class="btn btn-light text-uppercase font-weight-bold">supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '..\include\include_footer.php' ?>

</body>

</html>