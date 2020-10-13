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
    <link rel="icon" type="image/gif" href="assets\img\logocouleur.png"/>
    <title>Accueil</title>
    <style>

    </style>
</head>

<body>
    <?php include 'include\include_header.php' ?>                                      

    <?php include 'include\include_navbar.php' ?>

    <main class="container-fluid containerBg">
        <div class="row justify-content-center pt-3 pb-1">
            <div class="card col-md-8 shadow cardVolunteer mb-3">
                <div class="row no-gutters">
                    <div class="col-md">
                        <div class="card-body">
                            <h5 class="card-title textFont">Trouvez la structure qui vous correspond</h5>
                            <p class="card-text textFont">Vous souhaitez vous engager et participer à la vie sociale de votre quartier, Action Le Havre vous propose un large choix d'associations dans le bassin havrais pour vous permettre de trouver la structure qui vous correspond.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-1 pb-1">
            <div class="card col-md-8 shadow cardOrga mb-3">
                <div class="row no-gutters">
                    <div class="col-md">
                        <div class="card-body">
                            <h5 class="card-title textFont">Partagez vos envie</h5>
                            <p class="card-text textFont">Inscrivez-vous et publiez vos propres annonces pour trouver une association qui sera mettre en valeur vos savoir-faires. Action le Havre vous propose en plus un large choix de mission pour vous aider à faire un choix.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-1 pb-1">
            <div class="card col-md-8 shadow cardContact mb-3">
                <div class="row no-gutters">
                    <div class="col-md">
                        <div class="card-body">
                            <h5 class="card-title textFont">Contactez les acteurs locaux</h5>
                            <p class="card-text textFont">Action le Havre vous permet de contacter en les autres utilisateurs en un clic. Vous êtes intéressé part une annonce ou vous souhaiter contactez une association, laissez lui un mail pour ouvrir la discussion sans intermédiaires.</p>
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