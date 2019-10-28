<?php
  if (isset($_GET['erreur'])) {

    $erreur= " Utilisateur ou mot de passe incorrect";

  }
  else {
    $erreur="";
  }
    include('../view/connexion.view.php');



 ?>
