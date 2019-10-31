<?php
  require_once('CommentaireDAO.class.php');

  // Récupération des données de configuration
  $config = parse_ini_file('../config/config.ini');
  var_dump($config);
  // Creation de l'instace DAO
  $comm = new CommentaireDAO($config['database']);
  $m=$comm->getAll();
  $m2=$m;
  var_dump($m2);

  $m=$comm->getCommentaire('walidi','10/11/2018');
  var_dump($m);


 ?>
