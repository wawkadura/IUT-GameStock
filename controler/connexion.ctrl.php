<?php
  if (isset($_GET['erreur'])) {

    $erreur= " pseudo ou mot de passe incorrect";

  }
  else {
    $erreur="";
  }
    include('../view/connexion.view.php');

 ?>
