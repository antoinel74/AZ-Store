<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $json_data = file_get_contents('db/db.json');
    $products = json_decode($json_data, true);

    foreach ($_SESSION['cart'] as $productId) {
        if (isset($products[$productId])) {
            $product = $products[$productId];
            echo '<p>Products ' . $product['product'] . '</p>';
            echo '<p>' . $product['price'] . '</p>';
        }
    }
} else {
    echo '<p>Your cart is empty :"(</p>';
}
