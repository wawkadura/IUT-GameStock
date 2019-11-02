<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/design/jeu.style.css">
    <link rel="icon" type="image/png" href="../model/data/icons/logo1.png" />
    <title>GameStock.com</title>
  </head>
  <body>
    <?php
      if (isset($idAdherent)) {
        $param="&connecter=$idAdherent"; // pour passer l'identifiant de l'adherent aux autres view
      }else {
        $param="";
      }
     ?>
    <div id="hautpage">
        <div class="titre">
            <a href="../controler/main.ctrl.php?onglet=Acceuil<?=$param ?>" id="logo"> <img src="../model/data/icons/logo2.png" align="left"/></a>
            <form id="rechercher" action="recherche.ctrl.php?<?=$param ?>" method="POST">
                <input id="boiterecherche" type="text" name="cherche">
                <input id="boutonrecherche" type="submit" value="">
            </form>
        </div>
        <nav class="onglets">
          <ul>
          <li><a class="plateforme" href="../controler/main.ctrl.php?<?=$param ?>">Retour à la page d'acceuil</a></li>
        </nav>
    </div>

    <div id="milieupage">
      <fieldset class="jeu">
        <?php
          $image=$images->getCover($jeu['numJeu']);
          $titre = $jeu['titre'];
          $prix= $jeu['prix'];
          $dateSortie= $jeu['datesortie'];
          $description= $jeu['description'];
          $plateforme= $jeu['plateforme'];
          $categorie= $jeu['categorie'];

            echo "<h1>$titre</h1>";
            echo "<a href=\"#\"><img src=$chemin/$image[1] alt=\"\" width=\"440px\" height=\"500px\"> <p id=\"prix\">$jeu[2]€</p> </a>";

            echo "<h2> Date de sortie : $dateSortie</h2>";
            echo "<h2> Plateforme : $plateforme</h2>";
            echo "<h2> Catégorie : $categorie</h2>";

            echo "<fieldset class=\"description\">";
            echo "<legend class=\"descriptionTitre\">Description</legend>";
            echo "<h4>$description<h4>";
            echo "</fieldset>";

            if (isset($listcom)) {
              foreach ($listcom as $value) {
                $pseudo = $value['pseudo'];
                $dateAjout = $value['dateAjoute'];
                $message = $value['message'];

<<<<<<< HEAD
                echo "<fieldset class=\"commentaire\">";
                echo "<legend class=\"commentaireTitre\">Commentaire de $pseudo</legend>";
                echo "<h5>$dateAjout<h5>";
                echo "<h5>$message<h5>";
                echo "</fieldset>";
              }
            }
         ?>
         <fieldset class="message">
         <form action="jeu.ctrl.php?id=<?=$idJeu ?>&commentaire=2<?=$param ?>" method="POST">
             <label><b>Commentaire : </b></label>
             <textarea cols="50" rows="2" name="message" required></textarea>
             <br>
             <input type="submit" id='sbt' value='Poster' >
         </form>
         </fieldset>
         <p style='color:red'> <?=$erreur ?></p>
      </fieldset>
    </div>
    <div id="baspage">
    </div>
=======
          if ($listcom!=null) {
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
          } else {
            echo "<fieldset class=\"commentaire\">";
            echo "<legend class=\"commentaireTitre\">L'équipe GameStock</legend>";
            echo "<h4>Il n'y a actuellement aucun commentaire pour ce jeu ! </br>
            Soyez le premier à en écrire un juste en dessous. Votre avis nous intéresse ;)</h4>";
            echo "</fieldset>";
          }
       ?>
       <fieldset class="message">
         <legend class=\"commentaireTitre\">Poster un commentaire pour <?=$titre?></legend>
       <form action="jeu.ctrl.php?commentaire=1" method="POST">
           <label><b>Pseudo :  </b></label>
           <input id="psd" type="text" placeholder="Entrez votre pseudo" name="pseudo" required>
           <br>
           <label><b>Commentaire :  </b></label>
           <textarea cols="50" rows="2" name="message" required></textarea>
           <br>
           <input type="submit" id='sbt' value='Poster' >

       </form>
       </fieldset>


    </fieldset>


  </div>
  <div id="baspage">

  </div>
>>>>>>> 590c149b308f87fbfe4d672c5d62d824a45eff95

  </body>
</html>
