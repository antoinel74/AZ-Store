<?php
session_start();

$jsonFilePath = '..' . DIRECTORY_SEPARATOR . 'db' . DIRECTORY_SEPARATOR . 'db.json';
$json_data = file_get_contents($jsonFilePath);
$products = json_decode($json_data, true);

// TESTING // 
/* print_r($products); */
?>

<link rel="stylesheet" href="../assets/style/style.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php foreach ($products as $product) : ?>
    <div class="product-card">
        <figure>
            <img src="<?php echo $product['image_url']; ?>" alt="product-img" class="product-img">
        </figure>
        <div class="product-info">
            <p><?php echo $product['product']; ?>
                <span><?php echo $product['price'] . '€' ?></span>
            </p>
            <form method="post" action="">
                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                <button name="addToCart" class="btn">Add to cart</button>
            </form>
        </div>
    </div>
<?php endforeach; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addToCart'])) {
        $productId = $_POST['productId'];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = $productId;
    }
}
?>