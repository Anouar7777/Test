<?php
class Cercle{
    private $Rayon;
    private static $Pi=1.14;
    public function __construct($Rayon){
        $this->Rayon=$Rayon;


    }
    public function getRayon(){
        return $this->Rayon;
    }
    public function setRayon($Rayon){
        $this->Rayon=$Rayon;
    }

    public function surface(){
        return static::$Pi*$this->Rayon**2;
    }


}
 ?>