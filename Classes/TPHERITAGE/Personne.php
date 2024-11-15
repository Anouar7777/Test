<?php
class Personne{
    //Attributs
    private $prenom;
    private $nom;
    private $age;
    //constructors
    public function __construct($prenom,$nom,$age){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->age=$age;
    }
    //Getters & Setters
    public function getPrenom(){
        return $this->prenom;
    }
    public function setNom($prenom){
        $this->prenom=$prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setPrenom($nom){
        $this->nom=$nom;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age=$age;
    }

}
 ?>