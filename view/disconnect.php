<?php

require_once '..\controllers\disconnect_controller.php';

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
            <div class="col-sm-2 pt-5 pb-5">
                <div class="card w-100 shadow rounded navBg text-white">
                    <div class="card-body text-center">
                        <div class="h4">Déconnection</div>
                    </div>
                    <form method="post" action="" class="text-center mb-3">
                        <button type="submit" name="validateSubmit" id="validateSubmit" class="btn btn-light navText font-weight-bold mr-2">Oui</button>
                        <button type="submit" name="declineSubmit" id="declineSubmit" class="btn btn-light navText font-weight-bold">Non</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include '..\include\include_footer.php' ?>

</body>

</html>