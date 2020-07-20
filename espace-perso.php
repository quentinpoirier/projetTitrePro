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
                    <a class="nav-link text-white" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="association.php">Association</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="espace-perso.php">Espace personnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <form class="form-inline">
            <div class="form-group mx-sm-3">
                <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#connexionModal">Connexion</button>
            </div>
            <div class="form-group">
                <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#inscriptionModal">Inscription</button>
            </div>
        </form>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col text-uppercase h2 text-dark text-center">Mon espace</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card w-100 shadow rounded">
                        <form class="mb-3 bg-light p-5" action="index.php" method="post" novalidate>
                            <div class="form-group">
                                <label for="assoName" class="text-secondary font-weight-bold">Nom de votre association</label>
                                <input type="text" class="form-control" id="assoName" name="assoName" required>
                            </div>
                            <div class="form-group">
                                <label for="activity" class="text-secondary font-weight-bold">Domaine d'activité</label>
                                <select class="form-control" id="activity" name="activity">
                                    <option>Culture</option>
                                    <option>Environnement</option>
                                    <option>Social</option>
                                    <option>Sport</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="adress" class="text-secondary font-weight-bold">Adresse</label>
                                <input type="text" class="form-control" id="adress" name="adress" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-secondary font-weight-bold">Téléphone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="mail" class="text-secondary font-weight-bold">Adresse mail</label>
                                <input type="email" class="form-control" id="mail" name="mail" required>
                            </div>
                            <div class="form-group">
                                <label for="siren" class="text-secondary font-weight-bold">Numéro SIREN</label>
                                <input type="email" class="form-control" id="siren" name="siren" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-secondary">Valider</button>
                            </div>
                        </form>
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

    <!-- modal connexion -->
    <div class="modal fade" id="connexionModal" tabindex="-1" role="dialog" aria-labelledby="inscriptionModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="articleModalHeader" class="modal-header bg-dark">
                    <div class="modal-title text-white h4" id="exampleModalLabel">Formulaire d'inscription</div>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="mb-3 bg-light p-5" action="index.php" method="post" novalidate>
                    <div class="form-group">
                        <label for="login" class="text-secondary font-weight-bold">Identifiant</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-secondary font-weight-bold">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-outline-secondary">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal connexion -->

    <!-- modal d'inscription -->
    <div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="inscriptionModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="articleModalHeader" class="modal-header bg-dark">
                    <div class="modal-title text-white h4" id="exampleModalLabel">Formulaire d'inscription</div>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="mb-3 bg-light p-5" action="index.php" method="post" novalidate>
                    <div class="form-group">
                        <label for="login" class="text-secondary font-weight-bold">Adresse mail</label>
                        <input type="email" class="form-control" id="login" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="login" class="text-secondary font-weight-bold">Identifiant</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-secondary font-weight-bold">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="userType" class="text-secondary font-weight-bold">Utilisateur</label>
                        <select class="form-control" id="userType">
                            <option>Bénévole</option>
                            <option>Association</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-outline-secondary">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal d'inscription -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>