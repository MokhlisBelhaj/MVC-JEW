<?php

require_once 'controller/ProduitController.php';
$newproduit = new ProduitController();
$newproduit->addProduit();


?>
<div class="container text-center">
    <div class="rox d-flex justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-center ">
                    <a href="gestion">
                        <img class="mx-auto" src="./views/images/back.png" alt="back" style="  width: 20px; height: 20px;">
                    </a>
                    <h3>Ajouter Produit</h3>
                </div>

                <form method="post">
                    <div class="form-group">
                        <label for="name">name</label><br>
                        <input type="text" name="name" class="from-control" placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <label for="Product discription">Product discription</label><br>
                        <input type="text" name="ProductDiscription" class="from-control" placeholder="Product discription" required>
                    </div>
                    <div class="form-group">
                        <label for="Product Quantity">Product Quantity</label><br>
                        <input type="number" name="ProductQuantity" class="from-control" placeholder="Product Quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="Product Price">Product Price</label><br>
                        <input type="number" name="ProductPrice" class="from-control" placeholder="Product Price" required>
                    </div>
                    <div class="form-group">
                        <label for="img">name</label><br>
                        <input type="file" name="img" class="from-control" placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <select name="IDC" id=""><br>
                        <?php
                            $Cat = new CatégorieController();
                            $catégorie = $Cat->getallCatégorie();
                            foreach ($catégorie as $catégorie) : ?>
                            <option value="<?php echo $catégorie['IDC']; ?>"><?php echo $catégorie['Libellé']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                        <div>
                        <input type="submit" value="valide" name="add_product">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>