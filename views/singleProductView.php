<?php 
require_once 'partials/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $product->getImage(); ?>" alt="Image de <?php echo $product->getName(); ?>" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1><?php echo $product->getName(); ?></h1>
            <p><?php echo $product->getDescription(); ?></p>
            <p>Prix: <?php echo $product->getPrice(); ?>€</p>
            
            <form action="cartController.php?action=addToCart&id=<?php echo $product->getId(); ?>" method="post">
                <div class="form-group">
                    <label for="quantity">Quantité :</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="99" value="1">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter au panier</button>
            </form>
        </div>
    </div>
</div>
    <?php 
require_once 'partials/footer.php';
?>