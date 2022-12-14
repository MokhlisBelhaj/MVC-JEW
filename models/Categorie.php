<?php
class Categorie{
   static public function getallC(){
    $CATT= DB::connect()->prepare('SELECT * FROM `catégorie`');
    $CATT->execute();
    return $CATT->fetchAll();
    
   } 
   static public function addCat($Libellé){
      $stmt = DB::connect()->prepare('INSERT INTO `catégorie`(`Libellé`)   VALUES (:cat)');
      $stmt->bindParam('cat' , $Libellé);
      
            if($stmt->execute()){
         return'ok';
      }else{
   return 'error';
      }
      $stmt=null;
}
}
