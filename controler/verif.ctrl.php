<?php

  if (isset($_GET['verif'])) {
    $verif=$_GET['verif'];
  }else {
    $verif='connexion';
  }

  require_once('../model/AdherentDAO.class.php');
  $config = parse_ini_file('../config/config.ini');
  $adherents = new AdherentDAO($config['database']);

  if ($verif=='connexion') { //voir si la verification concerne une connexion ou une inscription
    $pseudo=$_POST['username'];
    $MDP=$_POST['password'];
    $MDPofficel = $adherents->getMDP($pseudo);

    if (count($MDPofficel)>0) {//verification que le pseudo existe
      if ($MDPofficel[0][0]==$MDP) { // verification que les mots de passes correspondents
        $profil=$adherents->getProfil($pseudo);
        header('Location: profil.ctrl.php?id='.$profil[0]['id']); //affichage du profil
      }else {
        header('Location: connexion.ctrl.php?erreur=1');
      }
    }else {
      header('Location: connexion.ctrl.php?erreur=1');
    }
  }
  if ($verif=='inscription') {  //voir si la verification concerne une connexion ou une inscription

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $pseudo=$_POST['pseudo'];
    $MDP=$_POST['password'];
    $confirmationMDP=$_POST['confirmPassword'];
    $email=$_POST['mail'];

    if (!$adherents->exist($pseudo)) { //verifier que le pseudo n'a pas déjà etais attribué
      if ($MDP==$confirmationMDP) { // verification que les mots de passes correspondents
        $valider=$adherents->CreeAdherent($pseudo,$nom,$prenom,$email,$MDP);
        if ($valider) {
          header('Location: ../view/inscriptionValider.view.html');
        }else {
          header('Location: inscription.ctrl.php?erreur=L\'inscription a ECHOUE desole!');
        }
      }else {
        header('Location: inscription.ctrl.php?erreur=Les mots de passes ne corresponde pas!');
      }
    }else {
      header('Location: inscription.ctrl.php?erreur=Pseudo existant');
    }
  }


 ?>
