<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/design/main.style.css">
    <link rel="icon" type="image/png" href="../model/data/icons/logo1.png" />
    <title>GameStock.com</title>
  </head>
  <body>




  <div id="hautpage">
      <div class="titre">
          <a href="../controler/main.ctrl.php?onglet=Acceuil" id="logo"> <img src="../model/data/icons/logo2.png" align="left"/></a>
          <form id="rechercher" action="" method="get" role="search">
              <input id="boiterecherche" type="text" value="">
              <input id="boutonrecherche" type="submit" value="">
          </form>
      </div>

      <div class="onglets">
        <ul>
        <!--  <li><a href="../controler/main.ctrl.php?onglet=EpicGames">Epic Games</a></li>-->
        <!--  <li><a href="../controler/main.ctrl.php?onglet=Battle.net">Battle.net</a></li>-->
        <!--  <li><a href="../controler/main.ctrl.php?onglet=GOG.com">GOG.com</a></li> -->
          <li><a href="../controler/main.ctrl.php?onglet=Nintendo">Nintendo</a></li>
          <li><a href="../controler/main.ctrl.php?onglet=Origin">Origin</a></li>
          <li><a href="../controler/main.ctrl.php?onglet=Playstation">Playstation</a></li>
          <li><a href="../controler/main.ctrl.php?onglet=Steam">Steam</a></li>
          <li><a href="../controler/main.ctrl.php?onglet=Uplay">Uplay</a></li>
          <li><a href="../controler/main.ctrl.php?onglet=Xbox">Xbox</a></li>
          <li class="dropdown"><a href="#">Mon compte</a>
              <ul class="dropdown-child">
                <li><a href="../controler/connexion.ctrl.php">Se connecter</a></li>
                <li><a href="../controler/inscription.ctrl.php">S'inscrire</a></li>
              </ul>
          </li>
      </ul>
     </div>
  </div>

  <div id="milieupage">
    <?php
      for ($i=0; $i <50 ; $i++) {
        $jeu=$list[$i];
        $img=$images->getCover($i+1);
        $titre=$jeu[1];
        echo "<p> <img src=$chemin/$img[1] alt=\"\" width=\"140px\" height=\"180px\"> $titre</p> ";
      }
     ?>
  </div>
  <div id="baspage">
  </div>





  </body>
</html>