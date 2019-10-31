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
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Nintendo">Nintendo</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Origin">Origin</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Playstation">Playstation</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Steam">Steam</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Uplay">Uplay</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Xbox">Xbox</a></li>
          <!-- <li class="dropdown"><a href="#">Mon compte</a>
              <ul class="dropdown-child"> -->
          <li><a class="compte" href="../controler/connexion.ctrl.php">Se connecter</a></li>
          <li><a class="compte" href="../controler/inscription.ctrl.php">S'inscrire</a></li>
              <!-- </ul>
          </li> -->
      </ul>
    </nav>
  </div>

  <div id="milieupage">
    <ul id="triage">
	     <li><a href="#">Trier par :</a>
		       <ul>
			          <li><a href="#">Date</a></li>
			          <li><a href="#">Prix Croissant</a></li>
			          <li><a href="#">Prix Décroissant</a></li>
			          <li><a href="#">Note des joueurs</a></li>
		      </ul>
	    </li>
    </ul>

    <?php
      for ($i=0; $i <count($list) ; $i++) {
        $jeu=$list[$i];
        $img=$images->getCover($jeu[0]);
        $titre=$jeu[1];
        echo "<a href=\"../controler/jeu.ctrl.php?id=$jeu[0]\"><img src=$chemin/$img[1] alt=\"\" width=\"240px\" height=\"280px\"> <p>$titre</p> </a>";
      }
     ?>
  </div>
  <div id="baspage">

  </div>





  </body>
</html>
