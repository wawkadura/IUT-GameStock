<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="hautpage">
        <div class="titre">
            <?php
              echo "<a href=\"../controler/main.ctrl.php?onglet=Acceuil&connecter=$profil[0]\" id=\"logo\"> <img src=\"../model/data/icons/logo2.png\" align=\"left\"/></a>";  
            ?>

        </div>
    <?php
      var_dump($profil[0]);
      var_dump($profil);
      var_dump($listcom);
     ?>
  </body>
</html>
