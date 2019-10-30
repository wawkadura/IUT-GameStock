<?php
class JeuDAO{
  private $db;

  function __construct($PATH){
    try{
      $database='sqlite:'.$PATH.'/gamestock.db';
      $this->db = new PDO($database);
    }
    catch (PDOException $e){
      die("erreur de connexion:".$e->getMessage());
  }
}
  function getAll(){
    $music= $this->db->query("SELECT * FROM jeu");
    $res=$music->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getJeuxPlatforme($platforme){
    $music= $this->db->query("SELECT * FROM jeu WHERE platforme=$platforme");
    $res=$music->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getJeux($id){
    $music= $this->db->query("SELECT * FROM jeu WHERE numero=$id");
    $res=$music->fetchAll( PDO::FETCH_CLASS[0]);
    return $res[0];
  }
}
 ?>
