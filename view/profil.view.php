<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/design/jeu.style.css">
    <link rel="icon" type="image/png" href="../model/data/icons/logo1.png" />
    <title>GameStock.com</title>
  </head>
  <body>




  <div id="hautpage">
      <div class="titre">
        <?php
          echo "<a href=\"../controler/main.ctrl.php?onglet=Acceuil&connecter=$profil[0]\" id=\"logo\"> <img src=\"../model/data/icons/logo2.png\" align=\"left\"/></a>";
        ?>
          <form id="rechercher" action="recherche.ctrl.php" method="GET">
              <input id="boiterecherche" type="text" name="cherche">
              <input id="boutonrecherche" type="submit" value="">
          </form>
      </div>
      <nav class="onglets">
        <ul>
        <!--  <li><a href="../controler/main.ctrl.php?onglet=EpicGames">Epic Games</a></li>-->
        <!--  <li><a href="../controler/main.ctrl.php?onglet=Battle.net">Battle.net</a></li>-->
        <!--  <li><a href="../controler/main.ctrl.php?onglet=GOG.com">GOG.com</a></li> -->
        <li><a class="plateforme" href="../controler/main.ctrl.php">Retour à la page d'acceuil</a></li>
      </nav>
  </div>

  <div id="milieupage">

  </div>
  
  <div id="baspage">

  </div>

  </body>
</html>

    <?php
      var_dump($profil[0]);
      var_dump($profil);
      var_dump($listcom);
     ?>
