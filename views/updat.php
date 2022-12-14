<?php
// $datas = new ProduitController();
// $produits = $datas->getAllProduit();
// foreach ($produits as $produit) {
//     if ($produit['ID'] == $_POST['ID']) {
//         if (isset($_POST['updat_product'])) {
//             $datas->update();
//         }
//     }
// }


    // $glob = $datas->getProd();
    if (isset($_POST['ID'])){
    $exitProd = new ProduitController();
    $prod=$exitProd->getProd();
    }
    if (isset($_POST['updat_product'])){
        $exitProd = new ProduitController();
        $exitProd->updateProd();
        }
    //com


?>

<div class="container text-center">
    <div class="rox d-flex justify-content-center">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-center ">
                    <a href="gestion">
                        <img src="./views/images/back.png" alt="back" style="  width: 20px; height: 20px;">
                    </a>
                    <h3>Modifier Produit</h3>
                </div>
                <form method="post">
                    <div class="form-group">
                        <label for="name">name</label><br>
                        <input type="text" name="ProductName" class="from-control" placeholder="name" value="<?php echo $prod->ProductName; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Product discription">Product discription</label><br>
                        <input type="text" name="Discription" class="from-control" placeholder="Product discription" value="<?php echo $prod->Discription; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Product Quantity">Product Quantity</label><br>
                        <input type="text" name="Quantity" class="from-control" placeholder="Product Quantity" value="<?php echo $prod->Quantity; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Product Price">Product Price</label><br>
                        <input type="text" name="Price" class="from-control" placeholder="Product Price" value="<?php echo $prod->Price; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="img">image</label><br>
                        <input type="file" name="img" class="from-control" value="<?php echo $prod->img; ?>" required>
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
                    <input type="hidden" name="ID" value="<?php echo $prod->ID ?>">
                        <input type="submit" name="updat_product">
                    </div>
            </div>
            </form>

            <div class="card-body bg-light">
            </div>
        </div>
    </div>
</div>
</div>