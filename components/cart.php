<?php
/* session_start(); */
$products = [];

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $json_data = file_get_contents('../db/db.json');
    $products = json_decode($json_data, true);
    echo '<div class="cart-container">';
    echo '<h1 class="page-title">Shopping Cart</h1>';
    echo '<ul class="shopping-cart">';
    $totalQuantity = count($_SESSION['cart']);

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
    echo '<p class="cart-empty">Your cart is empty.</p>';
    $totalQuantity = 0;
}

$cartTotal = cartTotal($_SESSION['cart'], $products);

function cartTotal($cart, $products)
{

    $total = 0;
    $totalTVA = 0;
    foreach ($cart as $productId) {
        if (isset($products[$productId])) {
            $total += $products[$productId]['price'];
            $totalTVA += $products[$productId]['price'] / 1.20; // assuming TVA is 20%
        }
    }
    return array(
        'total' => $total,
        'totalTVA' => $totalTVA
    );
}
?>



<div class="cart-checkout">
    <p id="price-total-tva">Total : <span> <?php echo $cartTotal['totalTVA'] ?> € </span></p>
    <p id="price-total">TOTAL+TVA : <span> <?php echo $cartTotal['total'] ?> € </span></p>
    <button id="checkout-btn" class="btn" onclick="window.location.href='checkout.view.php'">Go to Checkout</button>
</div>
</div>