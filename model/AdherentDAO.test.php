<?php
  require_once('AdherentDAO.class.php');
  
  $config = parse_ini_file('../config/config.ini');
  var_dump($config);

  $adherent = new AdherentDAO($config['database']);
  $m=$adherent->getAll();
  $m2=$m;
  var_dump($m2);
  $m=$adherent->getAdherent(2);
  var_dump($m);
  //$m=$adherent->CreeAdherent('jackie','jackie','j','jackie.j@yahoo.com','j');
  var_dump($m);
 ?>
