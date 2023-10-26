<?php
    echo "
        <section id='products' class='latest-product'>
            <div class='product-section'>
                <h3><span class='blue'>Our</span> last products</h3>
                <div class='products'>";
                    require "products.php";
                    echo "
                </div>
            </div>
        </section>
    ";
?>