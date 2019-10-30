<?php
class ImageDAO{
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
    $images= $this->db->query("SELECT * FROM image");
    $res=$images->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getCover($id){
    $images= $this->db->query("SELECT * FROM image WHERE  numeimage=$id and type='cover'" );
    $res=$images->fetchAll( PDO::FETCH_CLASS[0]);
    return $res[0];
  }
  function getImages($id){
    $images= $this->db->query("SELECT * FROM image WHERE  numeimage=$id and type='images'" );
    $res=$images->fetchAll( PDO::FETCH_CLASS[0]);
    return $res[0];
  }
}
 ?>
