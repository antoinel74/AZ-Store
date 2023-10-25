<?php

$json_data = file_get_contents('../db/db.json');
$products = json_decode($json_data, true);

// TESTING // 
print_r($products);
?>

<ul>
    <?php foreach ($products as $product);
    echo '<li>Price :' . $product['price'];
    ?>
</ul>