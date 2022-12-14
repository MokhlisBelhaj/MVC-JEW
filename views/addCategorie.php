<?php

require_once 'controller/CatégorieController.php';
$newproduit = new CatégorieController();
$newproduit->addCategorie();


?>
<div class="container text-center">
    <div class="rox d-flex justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-center ">
                    <a href="gestion">
                        <img class="mx-auto" src="./views/images/back.png" alt="back" style="  width: 20px; height: 20px;">
                    </a>
                    <h3>Ajouter Categorie</h3>
                </div>

                <form  method="post" >
                    <div class="form-group">
                        <label for="name">name Categorie</label><br>
                        <input type="text" name="nameCat" class="from-control" placeholder="name" required>
                    </div>
                    <div>
                        <input type="submit" value="valide" name="add_cat">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>