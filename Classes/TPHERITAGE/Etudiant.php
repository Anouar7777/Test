<?php
require_once("Classes/TPHERITAGE/Personne.php");
class Etudiant extends Personne{
       //Attributs
     
       private $note;
       //constructors
       public function __construct($prenom,$nom,$age,$note){
           parent::__construct($prenom,$nom,$age);
           $this->note=$note;
       }

}
?>