<?php 
require_once 'partials/header.php';
?>
<div class="container">
    <h1>Liste des produits</h1>
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="Image de <?php echo $product->getName(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                        <p class="card-text"><?php echo $product->getDescription(); ?></p>
                        <p class="card-text">Prix: <?php echo $product->getPrice(); ?>€</p>
                        <a href="productController.php?action=viewProduct&id=<?php echo $product->getId(); ?>" class="btn btn-primary">Voir le produit</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php 
require_once 'partials/footer.php';
?>