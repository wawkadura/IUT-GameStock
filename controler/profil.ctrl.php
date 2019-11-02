<?php
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else {
  $id=1;
}
require_once('../model/JeuDAO.class.php');
require_once('../model/AdherentDAO.class.php');
require_once('../model/CommentaireDAO.class.php');

$config = parse_ini_file('../config/config.ini');

$adherents = new AdherentDAO($config['database']);
$commentaires = new CommentaireDAO($config['database']);

$jeux = new JeuDAO($config['database']);

$profil=$adherents->getAdherent($id);
$listcom=$commentaires->getCommentairesAdherent($profil['pseudo']);

if (isset($profil) && isset($listcom)) {
  include('../view/profil.view.php');
}


 ?>
