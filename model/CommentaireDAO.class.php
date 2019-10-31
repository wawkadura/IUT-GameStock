<?php
class CommentaireDAO{
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
    $comm= $this->db->query("SELECT * FROM commentaire");
    $res=$comm->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getCommentaires($id){
    $comm= $this->db->query("SELECT * FROM commentaire WHERE numJeu=$id");
    $res=$comm->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getCommentairesAdherent($pseudo){
    $comm= $this->db->query("SELECT * FROM commentaire WHERE pseudo='$pseudo' ");
    $res=$comm->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }



}
 ?>
