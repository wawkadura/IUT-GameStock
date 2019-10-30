<?php
class AdherentDAO{
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
    $adherents= $this->db->query("SELECT * FROM adherent");
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getAdherent($id){
    $adherents= $this->db->query("SELECT * FROM adherent WHERE  id=$id" );
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res[0];
  }
  function getProfil($pseudo){
    $adherents= $this->db->query("SELECT * FROM adherent WHERE  pseudo='$pseudo' " );
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getMDP($pseudo){
    $adherents= $this->db->query("SELECT motdepasse FROM adherent WHERE  pseudo='$pseudo'" );
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }

  function getMail($id){
    $adherents= $this->db->query("SELECT email FROM adherent WHERE  id=$id" );
    $res=$adherents->fetch( PDO::FETCH_CLASS[0]);
    return $res[0];
  }
}
 ?>
