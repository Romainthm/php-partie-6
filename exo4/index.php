<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Partie 6 Exercice 4</title>
    </head>
    <body>
        <main>
            <a href="index.php?language=PHP&AMP;server=LAMP">click</a>
            <?php
            if (isset($_GET['language']) && isset($_GET['server'])) {
                ?> 
                <p>Language: <?= $_GET['language']; ?></p>
                <p>Serveur: <?= $_GET['server']; ?></p>
                <?php
            } else {
                echo 'Les paramètres ne sont pas correctment renseignés';
            }
            ?>
        </main>
    </body>
</html>
