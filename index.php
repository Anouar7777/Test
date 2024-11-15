<?php require_once("Classes/Voiture.php");
require_once("Classes/TPHERITAGE/Etudiant.php");
require_once("Classes/TPHERITAGE/Directeur.php");
require_once("Classes/TPHERITAGE/Salarie.php");

require_once("Classes/Cercle.php");
$V1=new Voiture("Red","BMW");
$V2=new Voiture("Blue","Audi");
 $C1=new Cercle(15);
 // echo $C1->surface();
 $etudiant=new Etudiant("anouar","mountasser",17,15);
 $salarie=new Salarie("anouar","mountasser",17,15000,"RH");
 $directeur=new Directeur("anouar","mountasser",17,16000,"developer");
 print_r($salarie);





?>
