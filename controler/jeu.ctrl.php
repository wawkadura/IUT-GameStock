<?php
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else {
  $id='1';
}
require_once('../model/JeuDAO.class.php');
require_once('../model/ImageDAO.class.php');
$config = parse_ini_file('../config/config.ini');
$chemin=$config['ImagesCover'];
$jeux = new JeuDAO($config['database']);
$images = new ImageDAO($config['database']);
$jeu=$jeux->getJeux($id);

if (isset($jeu) && isset($images) && isset($chemin)) {
  include('../view/jeu.view.php');
}




?>
