<?php
/******************************************************************************
*
*
C O N T R O L L E R
*/
require('../model/Debogage.php');
use Model\Debogage;
// Ici je code le contenu du contrôleur (Controller).
?>
<!-----------------------------------------------------------------------------
--
V I E W
-->
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modèle de base d'une page Bootstrap</title>
    <!-- Inclusion de la feuille de style CSS distante de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- Ici je code le contenu de la vue (View). -->
    <div class="container">
        <div class="starter-template">
            <h1>Ceci est notre modèle de base</h1>
            <p class="lead">Utilisez ce document comme un moyen de démarrer rapidement tout nouveau projet.</p>
        </div>
        <?php
            Debogage::afficher($_POST, '$_POST');
            Debogage::afficher($_GET, '$_GET');
            Debogage::afficher($_FILES, '$_FILES');
        ?>
        <div>
            <button class="btn btn-primary" type="submit">Bouton Bootstrap</button>
        </div>
    </div>
    <div>
        Message de test.
    </div>
    <!-- Inclusion de la bibliothèque distante Javascript Bootstrap et de Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>