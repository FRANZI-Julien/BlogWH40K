<?php
require_once 'model/classes/Cart.php';
require_once 'model/classes/Product.php';

class CartController {
    public function showCart() {
        session_start();
        
        // Vérifier si le panier existe dans la session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = new Cart();
        }
        
        // Récupérer les produits du panier
        $cartItems = $_SESSION['cart']->getItems();
        
        // Récupérer les détails des produits depuis le modèle
        $products = [];
        foreach ($cartItems as $productId => $quantity) {
            $product = Product::find($productId);
            $product['quantity'] = $quantity;
            $products[] = $product;
        }
        
        // Afficher la vue du panier avec les produits
        require_once 'view/cartView.php';
    }

    public function addToCart($productId, $quantity = 1) {
        session_start();
        
        // Vérifier si le panier existe dans la session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = new Cart();
        }
        
        // Ajouter le produit au panier avec la quantité spécifiée
        $_SESSION['cart']->addProduct($productId, $quantity);
        
        // Rediriger vers la page du produit ou la vue du panier
        header('Location: productController.php?action=viewProduct&id=' . $productId);
    }

    public function removeFromCart($productId) {
        session_start();
        
        // Vérifier si le panier existe dans la session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = new Cart();
        }
        
        // Supprimer le produit du panier
        $_SESSION['cart']->removeProduct($productId);
        
        // Rediriger vers la vue du panier
        header('Location: cartController.php?action=showCart');
    }

    public function checkout() {
        session_start();
        
        // Vérifier si le panier existe dans la session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = new Cart();
        }
        
        // Enregistrer les détails de la commande dans la base de données
        // ...
        
        // Vider le panier
        $_SESSION['cart'] = new Cart();
        
        // Afficher une page de confirmation de commande
        require_once 'view/orderConfirmationView.php';
    }
}
?>
