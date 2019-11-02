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
        $param="&connecter=$connecter"; // pour passer l'identifiant de l'adherent aux autres view
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
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Nintendo<?=$param ?>">Nintendo</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Origin<?=$param ?>">Origin</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Playstation<?=$param ?>">Playstation</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Steam<?=$param ?>">Steam</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Uplay<?=$param ?>">Uplay</a></li>
          <li><a class="plateforme" href="../controler/main.ctrl.php?onglet=Xbox<?=$param ?>">Xbox</a></li>
      </ul>
    </nav>

    <div id="milieupage">
      <?php
      if ($jeu==false) {
        echo "<p style='color:red'> Aucun jeux trouvé !</p>";
      }else {
        $img=$images->getCover($jeu[0]);
        echo "<a href=\"../controler/jeu.ctrl.php?id=$jeu[0]$param\"><img src=$chemin/$img[1] alt=\"\" width=\"240px\" height=\"280px\"> <p>$jeu[1]</p> </a>";
      }
       ?>
    </div>
    <div id="baspage">
    </div>
  </body>
</html>
