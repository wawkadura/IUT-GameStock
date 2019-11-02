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
    function getAll(){ //avoir la list de tous les objets Commentaire dans la base de données
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
    function CreeCommentaire($pseudo,$message,$numjeu){ //permet de cree un objet commentaire et de l'ajouter dans la base de données
      $query="INSERT INTO commentaire (pseudo, dateAjoute,message,numJeu) VALUES ('$pseudo',CURRENT_DATE,'$message','$numjeu')";
      $qry = $this->db->prepare($query)->execute();

      return $qry;
    }
  }
?>
