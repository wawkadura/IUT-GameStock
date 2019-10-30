<?php

class jeu{

 private $numero;
 private $titre;
 private $prix;
 private $datesortie;
 private $description;
 private $quantite;
 private $prixU;



 function __construct(int $quantite,int $numero,string $titre,int $prixU,string $datesortie,string $description){

   $this->quantite=$quantite;
   if (isset($numero)){
   $this->numero = $numero;
   $this->titre= $titre;
   $this->prixU= $prixU;
   $this->$datesortie = $datesortie;
   $this->description = $description;
 }


 assert(isset($this->numero));
 assert(isset($this->titre));
 assert(isset($this->prixU));
 assert(isset($this->datesortie));
 assert(isset($this->description));

assert($this->prixU >0);
assert($this->quantite >0);
 }

 function getNumero(){
   return $this->numero;
 }

 function getTitre(){
   return $this->titre;
 }

 function getPrixU(){
   return $this->prixU;
 }

 function getDateSortie(){
   return $this->datesortie;
 }

function getDescription(){
  return $this->description;
}
function getPrix(){
  if(!isset($this->prix)){
  $this->prix=$this->prixU* $this->quantite;
  }
  return $this->prix;
}








}


 ?>
