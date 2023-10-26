<?php
session_start();

$totalQuantity = 0;
if (isset($_SESSION['cart'])) {
    $totalItems = array_count_values($_SESSION['cart']);
    $totalQuantity = array_sum($totalItems);
}

?>

<html>
<header>
    <nav class="topnav">
        <div class="store">
            <li><a href="#store">AZ[store]</a></li>
        </div>
        <div class="homeAbout">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#contact">Contact</a></li>
        </div>
        <div class="login">
            <li><a href="../views/cart.view.php"><img class="cart" src="./assets/img/shopping-cart.svg" alt='shoppingCart'><span class="cart-notif">(<?php echo $totalQuantity; ?>)</span></li>
            <li><a href="/views/checkout.view.php">Login</a></li>
        </div>
    </nav>
</header>

</html>