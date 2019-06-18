<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Partie 6 Exercice 5</title>
    </head>
    <body>
        <main>
            <a href="index.php?week=12">IcI</a>
            <?php
            if (isset($_GET['week'])) {
                echo 'La semaine sélectionnée est la semaine ' . $_GET['week'] . '.';
            } else {
                echo 'Les paramètres ne sont pas correctment renseignés';
            }
            ?>
        </main>
    </body>
</html>
