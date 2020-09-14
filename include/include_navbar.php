<nav class="navbar sticky-top navbar-expand-lg navbar-light navBg">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="..\index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="..\view\organization.php">Association</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="..\view\advert.php">Annonces</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Espace personnel
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item navText" href="..\view\user.php">Mon profil</a>
                    <a class="dropdown-item navText" href="..\view\userAdvert.php">Mes annonces</a>
                </div>
            </li>
            <?php
            if (isset($_SESSION['user'])) {
                if ($_SESSION['user']['user_moderator'] >= 1) {
            ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Modération
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item navText" href="..\view\modoUser.php">Utilisateurs</a>
                            <a class="dropdown-item navText" href="..\view\modoAdvert.php">Annonces</a>
                            <a class="dropdown-item navText" href="..\view\modoContact.php">Contacts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="..\view\contact.php">Contact</a>
                    </li>
            <?php
                }
            }
            ?>
        </ul>

    </div>
    <form class="form-inline">
        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <div class="form-group">
                <a class="btn btn-light navText" href="..\view\disconnect.php" role="button">Se déconnecter</a>
            </div>
        <?php
        } else {
        ?>
            <div class="form-group mx-sm-3">
                <a class="btn btn-light navText" href="..\view\login.php" role="button">Connexion</a>
            </div>
            <div class="form-group">
                <a class="btn btn-light navText" href="..\view\register.php" role="button">Inscription</a>
            </div>
        <?php
        }
        ?>
    </form>
</nav>