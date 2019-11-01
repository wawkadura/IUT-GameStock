<?php
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else {
  $id='1';
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

if (isset($_GET['commentaire'])) {
  $pseudo=$_POST['pseudo'];
  $message = $_POST['message'];
  if ($adherents->exist($pseudo)) {
    $valider=$commentaires->CreeCommentaire($pseudo,$message,$id);
  }else {
    var_dump($pseudo);
  }
}

$jeu=$jeux->getJeux($id);
$listcom=$commentaires->getCommentaires($id);

if (isset($jeu) && isset($images) && isset($chemin) && isset($listcom)) {
  include('../view/jeu.view.php');
}




?>
