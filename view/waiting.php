<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="..\assets\css\styles.css">
    <title>Document</title>
</head>

<body onload="init()">
    <?php include '..\include\include_header.php' ?>

    <div class="container">
        <div class="row justify-content-center bg-dark">
            <div class="col-sm-6 text-white"> Vous serez redirigé dans <span id="countdown">5 s</span></div>
        </div>
    </div>

    <?php include '..\include\include_footer.php' ?>

    <script src="..\assets\js\script.js"></script>

</body>

</html>