<html>
<link rel="stylesheet" href="../assets/style/style.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $json_data = file_get_contents('../db/db.json');
    $products = json_decode($json_data, true);
    echo '<h1 class="page-title">Shopping Cart</h1>';
    echo '<ul class="shopping-cart">';

    foreach ($_SESSION['cart'] as $productId) {
        if (isset($products[$productId])) {
            $product = $products[$productId];
            echo '<li class="cart-item">';
            echo '<img src="' . $product['image_url'] . '" alt="nike">';
            echo '<p class="cart-product">' . $product['product'] . '</p>';
            echo '<p class="cart-price">' . $product['price'] . '€</p>';
            echo '<form method="post">';
            echo '<input type="hidden" name="productId" value="' . $productId . '">';
            echo '<button type="submit" class="btn" name="removeProduct">Remove</button>';
            echo '</form>';
            echo '</li>';
        }
    }
    echo '</ul>';

    if (isset($_POST['removeProduct'])) {
        $productId = $_POST['productId'];
        $key = array_search($productId, $_SESSION['cart']);
        if ($key !== false) {
            unset($_SESSION['cart'][$key]);
            header('Location: cart.view.php');
            exit;
        }
    }
} else {
    echo '<p>Your cart is empty :"(</p>';
}
?>

<button id="checkout-btn" onclick="window.location.href='checkout.view.php'">Go to Checkout</button>