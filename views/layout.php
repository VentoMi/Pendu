<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le pendu</title>
</head>
<body>
<div>
    <h1>Trouve le mot en moins de X coups</h1>
</div>
<div>
    <p>Le mot à deviner compte X lettres: ********</p>
</div>
<div>
    <img src="images/pendu0.gif" srcset="" alt="X">
</div>
<div>
    <?php
    include 'partials/form.php'
    ?>
    <!-- Si on joue inserer le form-->
    <!-- Si on a perdu inserer le msg de defaite-->
    <!-- Si on a gagner inserer le msg de victoire-->
</div>
</body>
</html>