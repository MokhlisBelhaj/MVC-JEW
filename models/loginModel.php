<?php 
class LoginModel {
   public function check($data) {
     $query = "SELECT * FROM admin WHERE Email = :email AND Password = :password";
     $stmt = DB::connect()->prepare($query);
     $stmt->bindParam(':email', $data['email']);
     $stmt->bindParam(':password', $data['password']);
     $stmt->execute();
     $result = $stmt->fetch();
     if ($result) {
       return true;
     } else {
       return false;
     }
   }
 }
 