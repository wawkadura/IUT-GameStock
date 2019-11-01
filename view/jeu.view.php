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
          <a href="../controler/main.ctrl.php?onglet=Acceuil" id="logo"> <img src="../model/data/icons/logo2.png" align="left"/></a>
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

    <fieldset class="jeu">
      <?php
        $image=$images->getCover($jeu[0]);
        $titre = $jeu[1];
        $prix= $jeu[2];
        $dateSortie= $jeu[3];
        $description= $jeu[4];
        $plateforme= $jeu[6];
        $categorie= $jeu[5];
          echo "<h1>$titre</h1>";
        //$listcom : list des commentaitres
          echo "<a href=\"../controler/jeu.ctrl.php?id=$jeu[0]\"><img src=$chemin/$image[1] alt=\"\" width=\"440px\" height=\"500px\"> <p id=\"prix\">$jeu[2]€</p> </a>";

          echo "<h2> Date de sortie : $dateSortie</h2>";
          echo "<h2> Plateforme : $plateforme</h2>";
          echo "<h2> Catégorie : $categorie</h2>";

          echo "<fieldset class=\"description\">";
          echo "<legend>Description</legend>";
          echo "<h4>$description<h4>";

          echo "</fieldset>";
       ?>
    </fieldset>


  </div>
  <div id="baspage">

  </div>

  </body>
</html>
