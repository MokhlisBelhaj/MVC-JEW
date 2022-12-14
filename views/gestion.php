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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $Cat = new CatégorieController();
                            $catégorie = $Cat->getallCatégorie();
                            
                            foreach ($catégorie as $catégorie) : ?>
                                <tr>
                                    <th><?php echo $catégorie['IDC']; ?></th>
                                    <td><?php echo $catégorie['Libellé']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <tfoot>
                            <tr>
                                <td colspan="3" style="text-align:center;">
                                    <a href="addCategorie">
                                        ajouter
                                    </a>
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
                                    <td><img style="width:20%" src="views/images/<?php echo $produit['img']; ?>" alt="<?php echo $produit['ProductName']; ?>"></td>
                                    <td><?php echo $produit['IDC']; ?></td>
                                    <td class="d-flex flex-row">


                                        <form action="updat" method="post">
                                            <input type="hidden" name="ID" value="<?php echo $produit["ID"] ?>">
                                            <button><img src="./views/images/pen.png" style="  width: 20px; height: 20px;"></button>
                                        </form>
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $produit["ID"] ?>">
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