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

  function getCommentaire($pseudo,$dateAjoute){
    $comm= $this->db->query("SELECT * FROM commentaire WHERE pseudo=$pseudo and dateAjoute=$dateAjoute");
    $res=$comm->fetchAll( PDO::FETCH_CLASS[0]);
    return $res[0];
  }


}
 ?>
