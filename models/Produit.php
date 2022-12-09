<?php
// require '../database/DB.php';
class Produit extends DB {

   static public function getall()
   {
      $query = "SELECT * FROM produits";
      $stmt = DB::connect()->prepare($query);
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $res;
   } 
   static public function delete($id){
      $stmtdelet = DB::connect()->prepare('DELETE FROM `produits` WHERE ID='.$id.'');
      $stmtdelet->execute();
      
   } 

}
