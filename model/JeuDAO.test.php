<?php
  require_once('JeuDAO.class.php');

  // Récupération des données de configuration
  $config = parse_ini_file('../config/config.ini');
  var_dump($config);
  // Creation de l'instace DAO
  $jeux = new JeuDAO($config['database']);
  $m=$jeux->getAll();
  $m2=$m[0];
  var_dump($m2[0]);

  $m=$jeux->getJeux(1);
  var_dump($m);

  $m=$jeux->getJeuxPlatforme('Steam');
  var_dump($m);



 ?>
