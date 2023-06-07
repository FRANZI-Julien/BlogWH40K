<?php
class Cart {
    private $items = [];

    public function addProduct($product_id, $quantity, $price) {
        if (isset($this->items[$product_id])) {
            $this->items[$product_id]['quantity'] += $quantity;
        } else {
            $this->items[$product_id] = [
                'quantity' => $quantity,
                'price' => $price
            ];
        }
    }

    public function removeProduct($product_id) {
        unset($this->items[$product_id]);
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->items as $product_id => $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

    public function getItems() {
        return $this->items;
    }
}