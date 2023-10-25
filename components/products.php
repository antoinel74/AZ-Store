<?php
$json_data = file_get_contents('../db/db.json');
$products = json_decode($json_data, true);

// TESTING // 
print_r($products);
?>

<link rel="stylesheet" href="/assets/style/style.css" type="text/css">

<?php foreach ($products as $product) : ?>
    <div class="product-card">
        <figure>
            <img src="<?php echo $product['image_url']; ?>" alt="product-img" class="product-img">
        </figure>
        <div class="product-info">
            <p><?php echo $product['product']; ?>
                <span><?php echo $product['price']; ?></span>
            </p>
            <button id="addToCart" class="btn btn--add">Add to cart</button>
        </div>
    </div>
<?php endforeach; ?>