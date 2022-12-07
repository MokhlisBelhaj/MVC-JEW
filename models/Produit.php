<?php
class Produit{
   static public function getall(){
    $stmt = DB::connect()->prepare('SELECT * FROM `produits`');
    $stmt->execute();
    return $stmt->fetchAll();
    
   } 
}
