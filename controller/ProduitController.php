<?php
// include_once '../models/Produit.php';
class ProduitController {

    public function getAllProduit(){
        $produits= Produit::getall();
        return $produits;
    }

    public function delete(){
        if(isset($_POST['id'])) {
            $id = $_POST['id'];
        $produits= Produit::delete($id);
    }
    }

// function delete() {
//     if(isset($_POST['delete'])) {
//         $delete = new ProduitController();
//         $delete->delete();
//     }
}

if(isset($_POST["id"])){
    $delet = new ProduitController();
    $delet->delete();
}

