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
          echo "<a href=\"../controler/jeu.ctrl.php?id=$jeu[0]\"><img src=$chemin/$image[1] alt=\"\" width=\"440px\" height=\"500px\"> <p id=\"prix\">$jeu[2]€</p> </a>";

          echo "<h2> Date de sortie : $dateSortie</h2>";
          echo "<h2> Plateforme : $plateforme</h2>";
          echo "<h2> Catégorie : $categorie</h2>";

          echo "<fieldset class=\"description\">";
          echo "<legend class=\"descriptionTitre\">Description</legend>";
          echo "<h4>$description<h4>";
          echo "</fieldset>";

          if (isset($listcom)) {
            foreach ($listcom as $value) {
              $pseudo = $value[0];
              $dateAjout = $value[1];
              $message = $value[2];
              //$note = $value[3];
              //$numJeu = $value[4];

              echo "<fieldset class=\"commentaire\">";
              echo "<legend class=\"commentaireTitre\">Commentaire de $pseudo</legend>";
              echo "<h5>$dateAjout<h5>";
              echo "<h5>$message<h5>";
              echo "</fieldset>";
            }
          }
       ?>
       <fieldset class="message">
       <form action="jeu.ctrl.php?commentaire=1" method="POST">
           <label><b>pseudo : </b></label>
           <input type="text" placeholder="Entrer votre pseudo" name="pseudo" required>
           <br>
           <label><b>Message : </b></label>
           <textarea cols="50" rows="2" name="message" required></textarea>
           <br>
           <input type="submit" id='submit' value='submit' >

       </form>
       </fieldset>


    </fieldset>


  </div>
  <div id="baspage">

  </div>

  </body>
</html>
