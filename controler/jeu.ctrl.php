<?php
  if (isset($_GET['id'])) {
    $idJeu=$_GET['id'];
  }else {
    $idJeu='1';
  }


  require_once('../model/JeuDAO.class.php');
  require_once('../model/ImageDAO.class.php');
  require_once('../model/CommentaireDAO.class.php');
  require_once('../model/AdherentDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  $chemin=$config['ImagesCover'];
  
  $jeux = new JeuDAO($config['database']);
  $images = new ImageDAO($config['database']);
  $commentaires = new CommentaireDAO($config['database']);
  $adherents = new AdherentDAO($config['database']);

  if (isset($_GET['connecter'])) {
      $erreur="";
      $idAdherent=$_GET['connecter'];
    if (isset($_GET['commentaire'])) {
      $adh=$adherents->getAdherent($idAdherent);
      $message = $_POST['message'];
      $valider=$commentaires->CreeCommentaire($adh['pseudo'],$message,$idJeu);

    }
  }else {
    $erreur="Il faut vous connecter pour pouvoir poster un commentaire ";
  }

  $jeu=$jeux->getJeux($idJeu);
  $listcom=$commentaires->getCommentaires($idJeu);

  if (isset($jeu) && isset($images) && isset($chemin) && isset($listcom)) {
    include('../view/jeu.view.php');
  }




?>
