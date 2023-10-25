<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $json_data = file_get_contents('db/db.json');
    $products = json_decode($json_data, true);

    foreach ($_SESSION['cart'] as $productId) {
        if (isset($products[$productId])) {
            $product = $products[$productId];
            echo '<p>Product: ' . $product['product'] . '</p>';
            echo '<p>Price: ' . $product['price'] . '</p>';
            echo '<form method="post">';
            echo '<input type="hidden" name="productId" value="' . $productId . '">';
            echo '<button type="submit" name="removeProduct">Remove from Cart</button>';
            echo '</form>';
        }
    }
    
    if (isset($_POST['removeProduct'])) {
        $productId = $_POST['productId'];
        $key = array_search($productId, $_SESSION['cart']);
        if ($key !== false) {
            unset($_SESSION['cart'][$key]);
            header('Location: cart.php');
            exit;
        }
    }
} else {
    echo '<p>Your cart is empty :"(</p>';
}
?>
