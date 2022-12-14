<?php
// include_once '../models/Produit.php';

use LDAP\Result;

class ProduitController {

    public function getAllProduit(){
        $produits= Produit::getall();
        return $produits;
    }
    
    public function addProduit(){
        if(isset($_POST['add_product'])){
            $data=array(
                'ProductName'=>$_POST['name'],
                'Discription'=>$_POST['ProductDiscription'],
                'Quantity'=>$_POST['ProductQuantity'],
                'Price'=>$_POST['ProductPrice'],
                'img'=>$_POST['img'],
                'IDC'=>$_POST['IDC']
            );
            $result=Produit::add($data);
            if($result==='ok'){
                header('Location:gestion');
            }else{
                echo $result;
            }

        }
    }


    public function delete(){
        if(isset($_POST['id'])) {
            $id = $_POST['id'];
        $produits= Produit::delete($id);
    }
    }

    public function updateProd(){
        $data=array(
            'ID'=>$_POST['ID'],
            'ProductName'=>$_POST['ProductName'],
            'Discription'=>$_POST['Discription'],
            'Quantity'=>$_POST['Quantity'],
            'Price'=>$_POST['Price'],
            'img'=>$_POST['img'],
            'IDC'=>$_POST['IDC'],
        );

        $msg = Produit::update($data);
        if($msg=='error'){
            echo $msg;
        }else{
            header('location:gestion');
        }
    }

    static public function getProd(){
        if(isset($_POST['ID'])){
            $data=array(
                'ID'=> $_POST['ID']
            );
        }
        return Produit::getone($data);
    }
}

if(isset($_POST["id"])){
    $delet = new ProduitController();
    $delet->delete();
}

