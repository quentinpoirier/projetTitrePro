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
                <div class="col text-uppercase h2 text-dark text-center">inscription</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">

                    <form class="bg-dark p-4 rounded-lg" action="index.php" method="post" novalidate>
                        <div class="form-group">
                            <label for="userMail" class="text-white text-uppercase">Mail</label>
                            <input type="email" class="form-control" id="userMail" name="userMail" required>
                        </div>
                        <div class="form-group">
                            <label for="userPassword" class="text-white text-uppercase">Mot de passe</label>
                            <input type="password" class="form-control" id="userPassword" name="userPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="userType" class="text-white text-uppercase">Status</label>
                            <select class="form-control" id="userType" name="userType">
                                <option>Association</option>
                                <option>Bénévole</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="volunteerFirstname" class="text-white text-uppercase">Prénom</label>
                            <input type="text" class="form-control" id="volunteerFirstname" name="volunteerFirstname" required>
                        </div>
                        <div class="form-group">
                            <label for="volunteerLastname" class="text-white text-uppercase">Nom</label>
                            <input type="text" class="form-control" id="volunteerLastname" name="volunteerLastname" required>
                        </div>
                        <div class="form-group">
                            <label for="volunteerBirthdate" class="text-white text-uppercase">Date de naissance</label>
                            <input type="date" class="form-control" id="volunteerBirthdate" name="volunteerBirthdate" required>
                        </div>
                        <div class="form-group">
                            <label for="oragnizationName" class="text-white text-uppercase">Nom de la structure</label>
                            <input type="text" class="form-control" id="oragnizationName" name="oragnizationName" required>
                        </div>
                        <div class="form-group">
                            <label for="activity" class="text-white text-uppercase">Domaine d'activité</label>
                            <select class="form-control" id="activity" name="activity">
                                <option>Culture</option>
                                <option>Environnement</option>
                                <option>Social</option>
                                <option>Sport</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="organizationAdress" class="text-white text-uppercase">Adresse</label>
                            <input type="text" class="form-control" id="organizationAdress" name="organizationAdress" required>
                        </div>
                        <div class="form-group">
                            <label for="organizationPhone" class="text-white text-uppercase">Téléphone</label>
                            <input type="text" class="form-control" id="organizationPhone" name="organizationPhone" required>
                        </div>
                        <div class="form-group">
                            <label for="organizationMail" class="text-white text-uppercase">Mail de contact</label>
                            <input type="email" class="form-control" id="organizationMail" name="organizationMail" required>
                        </div>
                        <div class="form-group">
                            <label for="organizationSiren" class="text-white text-uppercase">Numéro SIREN</label>
                            <input type="text" class="form-control" id="organizationSiren" name="organizationSiren" required>
                        </div>
                        <div class="form-group">
                            <label for="organizationDesc" class="text-white text-uppercase">Description de la structure</label>
                            <textarea type="text" class="form-control" id="organizationDesc" name="organizationDesc" rows="3" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="registerSubmit" id="registerSubmit" class="btn btn-light text-uppercase font-weight-bold">S'inscrire</button>
                        </div>
                    </form>

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