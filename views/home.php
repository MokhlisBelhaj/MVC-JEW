<div class="container">
    <div class="rox">
        <div class="col-md-12 mx">
            <div class="card">
                <div class="card-body bg-light">
                    <table class="table table-hover" style="text-align: center;">
                        <thead>
                            <tr>
                                <th scope="col"> IDC</th>
                                <th scope="col"> Libellé</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $Cat = new CatégorieController();
                            $catégorie = $Cat->getallCatégorie();
                            foreach ($catégorie as $catégorie) : ?>
                                <tr>
                                    <th><?php echo $catégorie['ID']; ?></th>
                                    <td><?php echo $catégorie['Libellé']; ?></td>
                                    <td>
                                        <a href="#"><img class="hh" src="views/images/trash.png" style="  width: 20px; height: 20px;"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <tfoot>
                            <tr>
                                <td colspan="3" style="text-align:center;">
                                    ajouter
                                </td>
                            </tr>
                        </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="rox">
        <div class="col-md-12 mx">
            <div class="card">
                <div class="card-body bg-light">
                    <table class="table table-hover" style="text-align: center;">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col"> ProductName</th>
                                <th scope="col"> Discription</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col"> img</th>
                                <th scope="col">IDC</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $data = new ProduitController();
                                $produit = $data->getAllProduit(); 
                                foreach ($produit as $produit) : ?>
                                <tr>
                                    <th><?php echo $produit['ID']; ?></th>
                                    <td><?php echo $produit['ProductName']; ?></td>
                                    <td><?php echo $produit['Discription']; ?></td>
                                    <td><?php echo $produit['Quantity']; ?></td>
                                    <td><?php echo $produit['Price']; ?></td>
                                    <td><img src="<?php echo $produit['img']; ?>" alt="<?php echo $produit['ProductName']; ?>"></td>
                                    <td><?php echo $produit['IDC']; ?></td>
                                    <td>

                                        <form action="" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $produit["ID"]?>">
                                            <!-- <input type="submit" name="delete" value="Delete"> -->

                                            
                                            <!--Nous alons mettre l'id de chaque produits dans ce lien (editproduct.php?ID=)pour supprimer -->
                                            <button name="delete" value="Delete"><img class="hh" src="./views/images/trash.png" style="  width: 20px; height: 20px;"></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <tfoot>
                            <tr>
                                <td colspan="8" style="text-align:center;">
                                <a href="ajouterProduit">ajouter</a>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>