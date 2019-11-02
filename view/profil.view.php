<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/design/jeu.style.css">
    <link rel="icon" type="image/png" href="../model/data/icons/logo1.png" />
    <title>GameStock.com</title>
  </head>
  <body>
<<<<<<< HEAD
    <div id="hautpage">
        <div class="titre">
            <a href="../controler/main.ctrl.php?onglet=Acceuil&connecter=<?=$profil[0]?>" id="logo"> <img src="../model/data/icons/logo2.png" align="left"/></a>
            <form id="rechercher" action="recherche.ctrl.php" method="GET">
                <input id="boiterecherche" type="text" name="cherche">
                <input id="boutonrecherche" type="submit" value="">
            </form>
        </div>
        <nav class="onglets">
          <ul>

          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Acceuil&connecter=<?=$profil[0]?>">Retour à la page d'acceuil</a></li>
        </nav>
    </div>

    <div id="milieupage">
    </div>

    <div id="baspage">
    </div>
=======




  <div id="hautpage">
      <div class="titre">
          <a href="../controler/main.ctrl.php?onglet=Acceuil&connecter=<?=$profil[0]?>" id="logo"> <img src="../model/data/icons/logo2.png" align="left"/></a>
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
        <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Acceuil&connecter=<?=$profil[0]?>">Retour à la page d'acceuil</a></li>
      </nav>
  </div>

  <div id="milieupage">
    <fieldset class="jeu">
      <?php
        echo "<h1>Profil de $profil[1]</h1>";
        echo "<a href=\"../controler/profil.ctrl.php?id=$profil[0]\"><img src=\"../model/data/icons/user.png\" alt=\"\" width=\"440px\" height=\"440px\"> <p id=\"prix\">$profil[1] $profil[2]</p> </a>";
        echo "<h2> Prénom : $profil[1]</h2>";
        echo "<h2> Nom : $profil[2]</h2>";
        echo "<h2> Email : $profil[4]</h2>";
        echo "<h2> Pseudo : $profil[3]</h2>";
        echo "<h2> Mot de passe : $profil[5]</h2>";



        if ($listcom!=null) {
          foreach ($listcom as $value) {
            $pseudo = $value[0];
            $dateAjout = $value[1];
            $message = $value[2];
            $numJeu = $value[3];
            $jeu=$jeux->getJeux($numJeu);
            $titre = $jeu[1];

            echo "<fieldset class=\"commentaire\">";
            echo "<legend class=\"commentaireTitre\">Votre commentaire pour $titre: </legend>";
            echo "<h5>$dateAjout<h5>";
            echo "<h5>$message<h5>";
            echo "</fieldset>";
            }
        } else {
          echo "<fieldset class=\"commentaire\">";
          echo "<legend class=\"commentaireTitre\">L'équipe GameStock</legend>";
          echo "<h4>Vous n'avez actuellement posté aucun commentaire sur un jeu ! </h4>";
          echo "</fieldset>";
        }
     ?>
    </fieldset>
  </div>

  <div id="baspage">

  </div>
>>>>>>> 590c149b308f87fbfe4d672c5d62d824a45eff95

  </body>
</html>
