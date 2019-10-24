<!DOCTYPE html>
<html lang="fr">
  <head>
    <title> Un exemple </title>
    <meta charset … />
    <link … />
  </head>
  <body>
    <p>
      <?php
      $nom = $_GET['nm'] ;
      $prenom = $_GET['pn'] ;
      if ( !empty($nom) && !empty($prenom) ) {
        echo "Bonjour $prenom $nom";
      } else {
        echo 'Bonjour toi !';
      }
      ?>
    </p>
  </body>
</html>
