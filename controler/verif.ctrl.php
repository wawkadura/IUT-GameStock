<?php
  if (isset($_GET['verif'])) {
    $verif=$_GET['verif'];
  }else {
    $verif='connexion';
  }
  require_once('../model/AdherentDAO.class.php');
  $config = parse_ini_file('../config/config.ini');
  $adherent = new AdherentDAO($config['database']);
  if ($verif=='connexion') {
    $pseudo=$_GET['username'];
    $MDP=$_GET['password'];
    $TrueMDP = $adherent->getMDP($pseudo);
    var_dump($TrueMDP);
    if (count($TrueMDP)>0) {
      if ($TrueMDP[0][0]==$MDP) {
        $id=$adherent->getProfil($pseudo);
        //header('Location: profil.ctrl.php?id='.$id[0][0]);
      }else {
        header('Location: connexion.ctrl.php?erreur=1');
      }
    }else {
      header('Location: connexion.ctrl.php?erreur=1');
    }
  }
  if ($verif=='inscription') {
    // code...
  }


 ?>
