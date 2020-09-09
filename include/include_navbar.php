<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-3">
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
            <li class="nav-item">
                <a class="nav-link text-white" href="..\view\user.php">Espace personnel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="..\view\contact.php">Contact</a>
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
                    <a class="dropdown-item" href="..\view\modoUser.php">Utilisateurs</a>
                    <a class="dropdown-item" href="..\view\modoAdvert.php">Annonces</a>
                    <a class="dropdown-item" href="..\view\modoContact.php">Contacts</a>
                </div>
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
            <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\disconnect.php" role="button">Se déconnecter</a>
        </div>
        <?php
        } else {
        ?>
        <div class="form-group mx-sm-3">
            <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\login.php" role="button">Connexion</a>
        </div>
        <div class="form-group">
            <a class="btn btn-light text-uppercase font-weight-bold" href="..\view\register.php" role="button">Inscription</a>
        </div>
        <?php
        }
        ?>
    </form>
</nav>