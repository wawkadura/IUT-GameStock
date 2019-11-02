<?php
<<<<<<< HEAD
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
  }else {
    $id=1;
  }
  require_once('../model/AdherentDAO.class.php');
  require_once('../model/CommentaireDAO.class.php');
=======
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else {
  $id=1;
}
require_once('../model/JeuDAO.class.php');
require_once('../model/AdherentDAO.class.php');
require_once('../model/CommentaireDAO.class.php');
>>>>>>> 590c149b308f87fbfe4d672c5d62d824a45eff95

  $config = parse_ini_file('../config/config.ini');

  $adherents = new AdherentDAO($config['database']);
  $commentaires = new CommentaireDAO($config['database']);

<<<<<<< HEAD
  $profil=$adherents->getAdherent($id);
  $listcom=$commentaires->getCommentairesAdherent($profil['pseudo']);
=======
$jeux = new JeuDAO($config['database']);

$profil=$adherents->getAdherent($id);
$listcom=$commentaires->getCommentairesAdherent($profil['pseudo']);
>>>>>>> 590c149b308f87fbfe4d672c5d62d824a45eff95

  if (isset($profil) && isset($listcom)) {
    include('../view/profil.view.php');
  }
?>
