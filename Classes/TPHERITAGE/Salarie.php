<?php
require_once("Classes/TPHERITAGE/Personne.php");
class Salarie extends Personne{
        //Attributs
     
        private $salaire;
        private $poste;
        //constructors
        public function __construct($prenom,$nom,$age,$salaire,$poste){
            parent::__construct($prenom,$nom,$age);
            $this->salaire=$salaire;
            $this->poste=$poste;
        }
}
 ?>