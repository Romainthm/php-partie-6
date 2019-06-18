<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 3</title>
  </head>
  <body>
    <main>
    <a href="index.php?startDate=02/05/2016&endDate=27/11/2016">Afficher L'url</a>
      <?php
        if (isset ($_GET['startDate']) && isset ($_GET['endDate'])) {
         echo 'Bonjour le start-up weekend commence le '.$_GET['startDate'].' est fini le ' .$_GET['endDate'].' !';
        }
       ?>
    </main>
  </body>
</html>
