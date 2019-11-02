<?php
  $recherche=$_POST['cherche'];
  //$attr=explode( ' ', $recherche );

  require_once('../model/JeuDAO.class.php');
  require_once('../model/ImageDAO.class.php');
  require_once('../model/AdherentDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  $chemin=$config['ImagesCover'];
  $jeux = new JeuDAO($config['database']);
  $images = new ImageDAO($config['database']);
  $jeu=$jeux->getRecherche($recherche);
  if ($_GET['connecter']) {
    $connecter=$_GET['connecter'];
  }


  if (isset($jeu)&& isset($images) && isset($chemin)) {
    include('../view/recherche.view.php');
  }

 ?>
