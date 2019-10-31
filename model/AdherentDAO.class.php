<?php
class AdherentDAO{
  private $db;

  function __construct($PATH){
    try{
      $database='sqlite:'.$PATH.'/testgamestock.db';
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
  function AjouterAdherent($id,$pseudo,$nom,$prenom,$email,$motdepasse){
    $adherent= $this->db->query("INSERT INTO adherent (id, pseudo,nom,prenom,email,motdepasse) VALUES ($id, $pseudo,$nom,$prenom,$email,$motdepasse)");
    if($adherent){
    $message = "Data inserted successfully.";

    }else{

    $message = "Sorry, Data is not inserted.";
  }
}
}



/* $query = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
13

14
    // Executes the query
15
    // If data inserted then set success message otherwise set error message
16
    if( $db->exec($query) ){
17
        $message = "Data inserted successfully.";
18
    }else{
19
        $message = "Sorry, Data is not inserted.";




        $query = "UPDATE students set name='$name', email='$email' WHERE rowid=$id";
       17

       18
           // Executes the query
       19
           // If data inserted then set success message otherwise set error message
       20
           // Here $db comes from "db_connect.php"
       21
           if( $db->exec($query) ){
       22
               $message = "Data is updated successfully.";
       23
           }else{
       24
               $message = "Sorry, Data is not updated.";
       25
           }
*/
 ?>
