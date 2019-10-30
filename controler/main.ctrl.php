
<?php
  if (isset($_GET['onglet'])) {
    $onglet=$_GET['onglet'];
  }else {
    $onglet='Acceuil';
  }

  require_once('../model/JeuDAO.class.php');
  require_once('../model/ImageDAO.class.php');
  $config = parse_ini_file('../config/config.ini');
  $chemin=$config['ImagesCover'];
  $jeux = new JeuDAO($config['database']);
  $images = new ImageDAO($config['database']);
  if ($onglet=='Acceuil') {
    //instanciation du JeuDAO
    $list= $jeux->getAll();
  }
  else {
    $list=$jeux->getJeuxPlatforme($onglet);
  }
  if (isset($list) && isset($images) && isset($chemin)) {
    include('../view/main.view.php');
  }
?>
