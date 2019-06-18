<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 6 exercice 1</title>
  </head>
  <body>
      <a href="index.php?lastname=Nemare&AMP;firstname=Jean">Afficher L'url</a>
    <main><button>Afficher L'url</button>
      <?php
        if (isset ($_GET['firstname']) && isset ($_GET['lastname']));
      echo 'Bonjour '.$_GET['firstname'].' '.$_GET['lastname'].' !';
       ?>
<!--isset — Détermine si une variable est déclarée et est différente de NULL-->
    </main>
  </body>
</html>
