<?php
class CatégorieController {
    public function getAllCatégorie(){
    $Caté= Categorie::getallC();
    return $Caté;
    }

public function addCategorie(){
    if(isset($_POST['add_cat'])){
            $Libellé = $_POST['nameCat'];
    
        $result=Categorie::addCat($Libellé);
        if($result==='ok'){
            header('Location:gestion');
        }else{
            echo $result;
        }

    }
}
}
?>