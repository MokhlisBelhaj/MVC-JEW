<?php
// require '../database/DB.php';
class Produit extends DB
{

   static public function getall()
   {
      $query = "SELECT * FROM produits";
      $stmt = DB::connect()->prepare($query);
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $res;
   }
   static public function getone($data)
   {
      $id = $data['ID'];
      try {
         $query = 'SELECT * FROM produits where ID=:id';
         $stmt = DB::connect()->prepare($query);
         $stmt->execute(array(":id" => $id));
         return $stmt->fetch(PDO::FETCH_OBJ);
      } catch (PDOException $ex) {
         echo 'erreur' . $ex->getMessage();
      }
   }
   static public function delete($id)
   {
      $stmtdelet = DB::connect()->prepare('DELETE FROM `produits` WHERE ID=' . $id . '');
      $stmtdelet->execute();
   }
   static public function add($data)
   {
      $stmt = DB::connect()->prepare('INSERT INTO `produits`(`ProductName`,`Discription`,`Quantity`,`Price`,`IDC`,`img`) 
   VALUES (:ProductName,:Discription,:Quantity,:Price,:IDC,:img)');
      $stmt->bindParam(':ProductName', $data['ProductName']);
      $stmt->bindParam(':Discription', $data['Discription']);
      $stmt->bindParam(':Quantity', $data['Quantity']);
      $stmt->bindParam(':Price', $data['Price']);
      $stmt->bindParam(':img', $data['img']);
      $stmt->bindParam(':IDC', $data['IDC']);
      if ($stmt->execute()) {
         return 'ok';
      } else {
         return 'error';
      }
      $stmt = null;
   }

   static public function update($data)
   {
      $stmt = DB::connect()->prepare('UPDATE produits SET ProductName = :ProductName, Discription = :Discription, Quantity = :Quantity, Price=:Price, IDC = :IDC, img = :img WHERE ID = :ID');
      $stmt->bindParam(':ProductName', $data['ProductName']);
      $stmt->bindParam(':Discription', $data['Discription']);
      $stmt->bindParam(':Quantity', $data['Quantity']);
      $stmt->bindParam(':Price', $data['Price']);
      $stmt->bindParam(':IDC', $data['IDC']);
      $stmt->bindParam(':img', $data['img']);
      $stmt->bindParam(':ID', $data['ID']);
      if ($stmt->execute()) {
         return 'ok';
      } else {
         return 'error';
      }
   }
}
