<nav class="navbar sticky-top navbar-expand-lg navbar-light navBg">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler btn btn-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img src="..\assets\img\logocouleur.png" class="navImg mr-3" alt="Responsive image">
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

            <?php
            if (isset($_SESSION['user'])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Espace personnel
                    </a>
                    <div class="dropdown-menu navBg" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item navBg text-white" href="..\view\user.php">Mon profil</a>
                        <a class="dropdown-item navBg text-white" href="..\view\userAdvert.php">Mes annonces</a>
                    </div>
                </li>
                <?php
                if ($_SESSION['user']['user_moderator'] >= 1) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Modération
                        </a>
                        <div class="dropdown-menu navBg" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item navBg text-white" href="..\view\modoUser.php">Utilisateurs</a>
                            <a class="dropdown-item navBg text-white" href="..\view\modoAdvert.php">Annonces</a>
                            <a class="dropdown-item navBg text-white" href="..\view\modoContact.php">Contacts</a>
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
    <form class="form-inline textFont">
        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <div class="form-group">
                <a class="text-white" href="..\view\disconnect.php" role="button">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                </a>
            </div>
        <?php
        } else {
        ?>
            <div class="form-group mx-sm-2">
                <a class="btn btn-light navText font-weight-bold" href="..\view\login.php" role="button">Connexion</a>
            </div>
            <div class="form-group">
                <a class="btn btn-light navText font-weight-bold" href="..\view\register.php" role="button">Inscription</a>
            </div>
        <?php
        }
        ?>
    </form>
</nav>