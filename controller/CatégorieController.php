<?php
class CatégorieController {
    public function getAllCatégorie(){
    $Caté= Categorie::getallC();
    return $Caté;
    }
}
?>