<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 2</title>
  </head>
  <body>
    <main>
        <a href="index.php?lastname=Nemare&firstname=Jean&age=20">IcI</a>
      <?php
      if ($_GET['age']) {
        if (isset ($_GET['firstname']) && isset ($_GET['lastname'])) {
         echo 'Bonjour '.$_GET['firstname'].' '.$_GET['lastname'].' !';
         echo '<br>Vous avez '.$_GET['age'].'ans.';
        };
      } else {
         echo 'Le paramètre <b>age</b> n\'est pas renseigné';
      }
       ?>
    </main>
  </body>
</html>
