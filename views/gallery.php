<?php
$Cat = new CatégorieController();
$catégorie = $Cat->getallCatégorie(); ?>
<select name="" id="">
  <?php
  foreach ($catégorie as $catégorie) : ?>
    <option value=""><?php echo $catégorie['Libellé']; ?></option>
  <?php endforeach; ?>
</select>
<?php
$data = new ProduitController();
$produit = $data->getAllProduit();
foreach ($produit as $produit) : ?>
  <div class="card" style="width: 18rem;">
    <img src="views/images/<?php echo $produit['img']; ?>" class="card-img-top" alt="<?php echo $produit['ProductName']; ?>">
    <div class="card-body">
      <h5 class="card-title"><?php echo $produit['ProductName']; ?></h5>
      <a href="" class="btn btn-primary">more</a>
    </div>
  </div>
<?php endforeach; ?>