<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Partie 6 Exercice 6</title>
    </head>
    <body>
        <main>
            <a title="Batiment et chambre" href="index.php?building=12&AMP;room=101">click</a>
            <?php
            if (isset($_GET['building']) && isset($_GET['room'])) {
                echo 'Michel habite l\'immeuble ' . $_GET['building'] . ', dans l\'appartement ' . $_GET['room'] . '.';
            } else {
                echo 'Les paramètres ne sont pas correctment renseignés';
            }
            ?>
        </main>
    </body>
</html>
