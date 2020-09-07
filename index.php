<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\styles.css">
    <title>Titre Pro</title>
    <style>

    </style>
</head>

<body>
    <?php include 'include\include_header.php' ?>

    <?php include 'include\include_navbar.php' ?>

    <main>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col text-uppercase h2 text-dark text-center">à la une</div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card w-100 shadow rounded bg-dark text-white">
                        <img src="assets\img\aquacaux.jpg" class="card-img-top" style="height: 18rem;" alt="aquacaux">
                        <div class="card-body">
                            <div class="card-title">Nom de l'association</div>
                            <div class="card-text">Une description rapide de l'association afin de se faire une idée de ses activités</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark">aquacaux@gmail.com</li>
                            <li class="list-group-item bg-dark">02 22 33 44 55</li>
                        </ul>
                        <div class="card-body">
                            <div href="#" class="btn btn-light text-uppercase">site web</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card w-100 shadow rounded bg-dark text-white">
                        <img src="assets\img\graineEnMain.jpg" class="card-img-top" style="height: 18rem;" alt="graineenmain">
                        <div class="card-body">
                            <div class="card-title">Nom de l'association</div>
                            <div class="card-text">Une description rapide de l'association afin de se faire une idée de ses activités</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark">aquacaux@gmail.com</li>
                            <li class="list-group-item bg-dark">02 22 33 44 55</li>
                        </ul>
                        <div class="card-body">
                            <div href="#" class="btn btn-light text-uppercase">site web</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card w-100 shadow rounded bg-dark text-white">
                        <img src="assets\img\médiaction.jpg" class="card-img-top" style="height: 18rem;" alt="médiaction">
                        <div class="card-body">
                            <div class="card-title">Nom de l'association</div>
                            <div class="card-text">Une description rapide de l'association afin de se faire une idée de ses activités</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark">aquacaux@gmail.com</li>
                            <li class="list-group-item bg-dark">02 22 33 44 55</li>
                        </ul>
                        <div class="card-body">
                            <div href="#" class="btn btn-light text-uppercase">site web</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'include\include_footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>