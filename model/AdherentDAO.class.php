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
  function getAll(){ //avoir la list de tous les objets adherent dans la base de données
    $adherents= $this->db->query("SELECT * FROM adherent");
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getAdherent($id){ // permet d'obtenir l'objet adherent de id = $id
    $adherents= $this->db->query("SELECT * FROM adherent WHERE  id=$id" );
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res[0];
  }
  function getProfil($pseudo){ //permet d'obtenir l'objet adherent a partir du pseudo
    $adherents= $this->db->query("SELECT * FROM adherent WHERE  pseudo='$pseudo' " );
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function getMDP($pseudo){ //permet d'obtenir le mot de passe a partir du pseudo utiliser dans connexion.ctrl.php
    $adherents= $this->db->query("SELECT motdepasse FROM adherent WHERE  pseudo='$pseudo'" );
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    return $res;
  }
  function exist($pseudo){ //permet de verifier si le pseudo existe ou non
    $adherents= $this->db->query("SELECT pseudo FROM adherent WHERE  pseudo='$pseudo'" );
    $res=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    if (count($res)>0) {
      return true;
    }else {
      return false;
    }
  }
  function CreeAdherent($pseudo,$nom,$prenom,$email,$motdepasse){ //permet de cree un objet adherent et de l'ajouter dans la base de données
    $adherents= $this->db->query("SELECT id FROM adherent ORDER BY id DESC LIMIT 1" );
    $id=$adherents->fetchAll( PDO::FETCH_CLASS[0]);
    $id=$id[0][0] +1; //creation de sont identifiant unique

    $query="INSERT INTO adherent (id, pseudo,nom,prenom,email,motdepasse) VALUES ($id, '$pseudo','$nom','$prenom','$email','$motdepasse')";
    $qry = $this->db->prepare($query)->execute();

    return $qry;
  }
}

      /*  $query = "UPDATE students set name='$name', email='$email' WHERE rowid=$id"; */
 ?>
