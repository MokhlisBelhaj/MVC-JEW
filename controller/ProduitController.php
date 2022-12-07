<?php
class ProduitController extends Controller{
    public function getAllProduit(){
    $produits= Produit::getall();
    return $produits;
    }

}

?>