<?php
class Categorie{
   static public function getallC(){
    $CATT= DB::connect()->prepare('SELECT * FROM `catégorie`');
    $CATT->execute();
    return $CATT->fetchAll();
    
   } 
}
