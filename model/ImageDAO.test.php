<?php
  require_once('ImageDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  var_dump($config);
  
  $image = new ImageDAO($config['database']);
  $m=$image->getAll();
  $m2=$m;
  var_dump($m2);

  $m=$image->getCover(5);
  var_dump($m);


 ?>
