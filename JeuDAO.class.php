<?php
require_once('jeu.class.php');

class DAO{
  private $db;


  function __construct(){

    try{
      $this->db=new PDO('sqlite:data.db');
    }
    catch (PDOException $e){
      die("erreur de connexion:".$e->getMessage());
  }
}


function read(string $numero, int $quantite=1) : jeu{

  $req= "SELECT * FROM jeu WHERE numero='$numero'";
}

 ?>
