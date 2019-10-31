<?php
  require_once('AdherentDAO.class.php');

  // Récupération des données de configuration
  $config = parse_ini_file('../config/config.ini');
  var_dump($config);
  // Creation de l'instace DAO
  $adherent = new AdherentDAO($config['database']);
  $m=$adherent->getAll();
  $m2=$m;
  var_dump($m2);

  $m=$adherent->getAdherent(2);
  var_dump($m);
  $adherent->AjouterAdherent(11,'walidi','amine','asci','walidi.ascii@yahoo.com','waw');

 ?>
