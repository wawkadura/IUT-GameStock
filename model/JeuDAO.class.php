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
    function getAll(){ //avoir la list de tous les objets Jeu dans la base de données
      $jeu= $this->db->query("SELECT * FROM jeu");
      $res=$jeu->fetchAll( PDO::FETCH_CLASS[0]);
      return $res;
    }
    function getAllSorted($sort){
      $jeu= $this->db->query("SELECT * FROM jeu ORDER BY $sort");
      $res=$jeu->fetchAll( PDO::FETCH_CLASS[0]);
      return $res;
    }

    function getJeuxPlatforme($platforme){
      $jeu= $this->db->query("SELECT * FROM jeu WHERE plateforme='$platforme'");
      $res=$jeu->fetchAll( PDO::FETCH_CLASS[0]);
      return $res;
    }
    function getJeuxPlatformeSorted($platforme,$sort){
      $jeu= $this->db->query("SELECT * FROM jeu WHERE plateforme='$platforme' ORDER BY $sort");
      $res=$jeu->fetchAll( PDO::FETCH_CLASS[0]);
      return $res;
    }
    function getRecherche($recherche){
      $jeu= $this->db->query("SELECT * FROM jeu WHERE titre='$recherche'");
      $res=$jeu->fetchAll( PDO::FETCH_CLASS[0]);

      if (count($res)>0) {
        return $res[0];
      }else {
        return false;
      }
    }
    function getJeux($id){
      $jeu= $this->db->query("SELECT * FROM jeu WHERE numJeu=$id");
      $res=$jeu->fetchAll( PDO::FETCH_CLASS[0]);
      return $res[0];
    }
  }
?>
