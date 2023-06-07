<?php
require_once 'model/classes/Product.php';
require_once 'model/classes/Cart.php';

class ProductController {
    public function listProducts() {
        // Récupérer tous les produits depuis le modèle
        $products = Product::getAll();
        
        // Afficher la vue de la liste des produits
        require_once 'view/productView.php';
    }

    public function viewProduct($id) {
        // Récupérer un produit spécifique en fonction de l'ID depuis le modèle
        $product = Product::find($id);
        
        // Afficher la vue du produit individuel
        require_once 'view/singleProductView.php';
    }

    public function addToCart($productId, $quantity = 1) {
        // Créer une instance du contrôleur du panier
        $cartController = new CartController();
        
        // Appeler la méthode d'ajout au panier du contrôleur du panier
        $cartController->addToCart($productId, $quantity);
    }
}
?>
