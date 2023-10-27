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
            <ul>
                <li><a href="index.php">AZ[store]</a></li>
            </ul>
        </div>
        <div class="homeAbout">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="/components/about.view.php">About</a></li>
                <li><a href="../index.php#products">Products</a></li>
                <li><a href="/components/contact.view.php">Contact</a></li>
            </ul>
        </div>
        <div class="login">
            <ul>
                <li><a href="../views/cart.view.php"><img class="cart" src="../assets/img/shopping-cart.svg" alt='shoppingCart'><span class="cart-notif">(<?php echo $totalQuantity; ?>)</span></a></li>
                <li><a href="/views/checkout.view.php">Login</a></li>
            </ul>
        </div>
    </nav>
</header>

</html>