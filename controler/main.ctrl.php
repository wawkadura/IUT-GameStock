
<?php
  if (isset($_GET['onglet'])) {
    $onglet=$_GET['onglet'];
  }else {
    $onglet='Acceuil';
  }

  require_once('../model/JeuDAO.class.php');
  require_once('../model/ImageDAO.class.php');
  require_once('../model/AdherentDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  $chemin=$config['ImagesCover'];

  $jeux = new JeuDAO($config['database']);
  $images = new ImageDAO($config['database']);

  if (isset($_GET['connecter'])) {  // pour l'affichage du nom du profil connecter
    $id=$_GET['connecter'];
    $adherents = new AdherentDAO($config['database']);
    $connecter=$adherents->getAdherent($id);

  }

  if ($onglet=='Acceuil') { //pour l'affichage du bon onglet
    var_dump($onglet);
    $list= $jeux->getAll();

  }
  else {
    $list=$jeux->getJeuxPlatforme($onglet);
  }

  if (isset($list) && isset($images) && isset($chemin)) {

    include('../view/main.view.php');
  }
?>
