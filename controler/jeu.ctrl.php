<?php
if (isset($_GET['jeu'])) {
  $jeu=$_GET['jeu'];
  include('../view/jeu.view.php');
}else {
  $jeu='gta';
  include('../view/jeu.view.php');
}




?>
