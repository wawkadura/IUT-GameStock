<?php

  if (isset($_GET['verif'])) {
    $verif=$_GET['verif'];
  }else {
    $verif='connexion';
  }

  require_once('../model/AdherentDAO.class.php');
  $config = parse_ini_file('../config/config.ini');
  $adherents = new AdherentDAO($config['database']);
  if ($verif=='connexion') {
    $pseudo=$_POST['username'];
    $MDP=$_POST['password'];
    $MDPofficel = $adherents->getMDP($pseudo);

    if (count($MDPofficel)>0) {
      if ($MDPofficel[0][0]==$MDP) {
        $id=$adherents->getProfil($pseudo);
        header('Location: profil.ctrl.php?id='.$id[0][0]);
      }else {
        header('Location: connexion.ctrl.php?erreur=1');
      }
    }else {
      header('Location: connexion.ctrl.php?erreur=1');
    }
  }
  if ($verif=='inscription') {

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $pseudo=$_POST['pseudo'];
    $MDP=$_POST['password'];
    $confirmationMDP=$_POST['confirmPassword'];
    $email=$_POST['mail'];

    if (!$adherents->exist($pseudo)) {
      if ($MDP==$confirmationMDP) {
        $valider=$adherents->CreeAdherent($pseudo,$nom,$prenom,$MDP,$email);
        /*if ($valider) {
          header('Location: inscriptionValider.view.html');
        }else {
          header('Location: inscription.ctrl.php?erreur=L\'inscription a ECHOUE desole!');
        }*/
      }else {
        header('Location: inscription.ctrl.php?erreur=Les mots de passes ne corresponde pas!');
      }
    }else {
      header('Location: inscription.ctrl.php?erreur=Pseudo existant');
    }
  }


 ?>
