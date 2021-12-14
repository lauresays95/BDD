<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Phytopinax - connection</title>
    <link rel="stylesheet" href="./vendor/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/footer.css">
    <script src="./vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="./js/functions.js"></script>
</head>
<body>

<?php require("../view/elements/header.php"); ?>
<?php require("../view/elements/searchBar.php"); ?>
<?php require("../view/elements/titlebanniere.php"); ?>

<main class="corpsPage">

    <form class="row" method="post" action="">


        <div class="mb-3 d-flex justify-content-center">
            <div class="col-8">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" <?php setMail(); ?>
                       name="mailconnect"
                       placeholder="name@example.com"/>
            </div>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <div class="col-8">
                <label for="exampleFormControlInput2" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="mdpconnect" id="exampleFormControlInput2">
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <input class="btn phyto-btn col-4" type="submit" name="formconnexion" value="Se connecter"/>
        </div>

    </form>

    <?php // Si une erreur de formulaire est définie :  affichage de l'erreur
    if (isset($error)) {
        setError($error);
    }
    ?>
</main>

<?php require("../view/elements/footer.php"); ?>
<script src="./vendor/bootstrap/dist/js/bootstrap.js" async="async"></script>
</body>
</html>

