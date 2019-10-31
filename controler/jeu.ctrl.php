<?php
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else {
  $id='1';
}
require_once('../model/JeuDAO.class.php');
require_once('../model/ImageDAO.class.php');
require_once('../model/CommentaireDAO.class.php');

$config = parse_ini_file('../config/config.ini');
$chemin=$config['ImagesCover'];

$jeux = new JeuDAO($config['database']);
$images = new ImageDAO($config['database']);
$commentaires = new CommentaireDAO($config['database']);

$jeu=$jeux->getJeux($id);
$listcom=$commentaires->getCommentaires($id);
//var_dump($listcom);

if (isset($jeu) && isset($images) && isset($chemin) && isset($listcom)) {
  include('../view/jeu.view.php');
}




?>
