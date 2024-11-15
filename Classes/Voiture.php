<?php class Voiture{
    private $couleur;
    private $mark;
    
    public function __construct($couleur,$mark){
        $this->mark=$mark;
        $this->couleur=$couleur;
    }
    public function __toString() {
        return  "Couleur: " . $this->couleur . " Mark: " . $this->mark;
    }

}
?>