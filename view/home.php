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
    <header class="d-flex flex-row align-items-center justify-content-center bg-white header">
        <div class="d-flex">
            <div class="text-dark h2">TITRE & LOGO</div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-3">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="view\home.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="view\organization.php">Association</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="view\advert.php">Annonces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="view\user.php">Espace personnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="view\contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <form class="form-inline">
            <div class="form-group mx-sm-3">
                <a class="btn btn-light text-uppercase font-weight-bold" href="view\login.php" role="button">Connexion</a>
            </div>
            <div class="form-group">
                <a class="btn btn-light text-uppercase font-weight-bold" href="view\register.php" role="button">Inscription</a>
            </div>
        </form>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col text-uppercase h2 text-dark text-center">à la une</div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card w-100 shadow rounded">
                        <img src="assets\img\aquacaux.jpg" class="card-img-top" style="height: 18rem;" alt="aquacaux">
                        <div class="card-body">
                            <div class="card-title">Nom de l'association</div>
                            <div class="card-text">Une description rapide de l'association afin de se faire une idée de ses activités</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">aquacaux@gmail.com</li>
                            <li class="list-group-item">02 22 33 44 55</li>
                        </ul>
                        <div class="card-body">
                            <div href="#" class="btn btn-dark">site web</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card w-100 shadow rounded">
                        <img src="assets\img\graineEnMain.jpg" class="card-img-top" style="height: 18rem;" alt="graineenmain">
                        <div class="card-body">
                            <div class="card-title">Nom de l'association</div>
                            <div class="card-text">Une description rapide de l'association afin de se faire une idée de ses activités</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">aquacaux@gmail.com</li>
                            <li class="list-group-item">02 22 33 44 55</li>
                        </ul>
                        <div class="card-body">
                            <div href="#" class="btn btn-dark">site web</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card w-100 shadow rounded">
                        <img src="assets\img\médiaction.jpg" class="card-img-top" style="height: 18rem;" alt="médiaction">
                        <div class="card-body">
                            <div class="card-title">Nom de l'association</div>
                            <div class="card-text">Une description rapide de l'association afin de se faire une idée de ses activités</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">aquacaux@gmail.com</li>
                            <li class="list-group-item">02 22 33 44 55</li>
                        </ul>
                        <div class="card-body">
                            <div href="#" class="btn btn-dark">site web</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="d-flex flex-row align-items-center justify-content-center bg-dark header mt-5">
        <div class="d-flex">
            <div class="text-white h4">mentions légales / contact / acceuil</div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>