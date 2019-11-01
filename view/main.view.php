<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/design/main.style.css">
    <link rel="icon" type="image/png" href="../model/data/icons/logo1.png" />
    <title>GameStock.com</title>
  </head>
  <body>


    <?php
      if (isset($connecter)) {
        $param="&connecter=$connecter[0]";
      }else {
        $param="";
      }

     ?>
  <div id="hautpage">
      <div class="titre">
          <a href="../controler/main.ctrl.php?onglet=Acceuil<?=$param ?>" id="logo"> <img src="../model/data/icons/logo2.png" align="left"/></a>
          <form id="rechercher" action="recherche.ctrl.php" method="GET">
              <input id="boiterecherche" type="text" name="cherche">
              <input id="boutonrecherche" type="submit" value="">
          </form>
      </div>

      <nav class="onglets">
        <ul>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Nintendo<?=$param ?>">Nintendo</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Origin<?=$param ?>">Origin</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Playstation<?=$param ?>">Playstation</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Steam<?=$param ?>">Steam</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Uplay<?=$param ?>">Uplay</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Xbox<?=$param ?>">Xbox</a></li>

              <?php
                if (isset($connecter)) {
                  echo"<li><a class=\"compte\" href=\"../controler/profil.ctrl.php?id=$connecter[0]\">$connecter[1]</a></li>";
                  echo"<li><a class=\"compte\" href=\"../controler/main.ctrl.php?onglet=Acceuil\">déconnecte</a></li>";
                } else {
                  echo"<li><a class=\"compte\" href=\"../controler/connexion.ctrl.php\">Se connecter</a></li>";
                  echo "<li><a class=\"compte\" href=\"../controler/inscription.ctrl.php\">S'inscrire</a></li>";
                }
              ?>

      </ul>
    </nav>
  </div>

  <div id="milieupage">
    <ul id="triage">
	     <li><p>Trier par :</p>
		       <ul>
			          <li><a href="../controler/main.ctrl.php?onglet=<?=$onglet?>& Trier=prix">Prix Croissant</a></li>
			          <li><a href="../controler/main.ctrl.php?onglet=<?=$onglet?>& Trier=prix DESC">Prix Décroissant</a></li>
			          <!--<li><a href="../controler/main.ctrl.php?onglet=Nintendo& Trier=Date">Note des joueurs</a></li>-->
		      </ul>
	    </li>
    </ul>

    <?php
      for ($i=0; $i <count($list) ; $i++) {
        $jeu=$list[$i];
        $img=$images->getCover($jeu[0]);
        $titre=$jeu[1];
        echo "<a href=\"../controler/jeu.ctrl.php?id=$jeu[0]\"><img src=$chemin/$img[1] alt=\"\" width=\"240px\" height=\"280px\"> <p>$titre</p> <p id=\"prix\">$jeu[2]€</p> </a>";
      }
     ?>
  </div>
  <div id="baspage">

  </div>





  </body>
</html>
