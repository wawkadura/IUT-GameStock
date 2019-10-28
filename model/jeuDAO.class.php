<?php
class jeu{
  private $db;
  private $numero;
  private $titre;
  private $prix;
  private $datasortie;
  function __construct($PATH){
    $database='sqlite:'.$PATH.'/GameStock.db';
    $this->db = new PDO($database);
  }


}


 ?>
