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

  </body>
</html>
