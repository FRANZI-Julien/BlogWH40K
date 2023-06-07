<?php 
require_once 'partials/header.php';
?>

<div class="container">
    <h1>Panier</h1>

    <?php if (count($cartItems) > 0) { ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartItems as $item) { ?>
                    <tr>
                        <td><?php echo $item->getProduct()->getName(); ?></td>
                        <td><?php echo $item->getProduct()->getPrice(); ?>€</td>
                        <td><?php echo $item->getQuantity(); ?></td>
                        <td><?php echo $item->getTotalPrice(); ?>€</td>
                        <td>
                            <form action="cartController.php?action=removeFromCart&id=<?php echo $item->getProduct()->getId(); ?>" method="post">
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h3>Total: <?php echo $cartTotal; ?>€</h3>

        <a href="checkout.php" class="btn btn-primary">Passer la commande</a>
    <?php } else { ?>
        <p>Votre panier est vide.</p>
    <?php } ?>
</div>

<?php 
require_once 'partials/footer.php';
?>