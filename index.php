<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exercice 4 : Les fonctions</title>
  </head>
  <body>
    <p>
      <?php
      function whoAreYou($name = 'Granizo y Oliver', $firstname = 'Raphaël', $age = 41){
        return 'Bonjour '.' '.'$firstname'.' '.'$name'.', tu as'.' '.'$age';
      }
      echo whoAreYou();
      ?>
    </p>
  </body>
</html>
