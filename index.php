<html>

    <section class="index">
        <div>
            <h2>Shoe the right one</h2>
            <button class="see-store">See our store</button>
            <img src="assets/img/shoe_one.png">
        </div>
    </section>
    <section class="latest-product">
        <div class="product-section">
            <h3>Our last products</h3>
            <div class="products">
                <?php
                    $json = file_get_contents('./db/db.json');
                    $products = json_decode($json, true);
                    foreach($products as $product) {
                        echo "
                            <article class='product-card' data-product-id=$product[id]>
                                <img class='product-image' src='$product[image_url]'>
                                <div>
                                    <p class='product-name'>$product[product]</p>
                                    <p class='product-price'>$product[price]</p>
                                </div>
                            </article>
                        ";
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="marketing">
        <img class="shoe" src="./assets/img/shoe_two.png">
        <h2>We provide you the best quality</h2>
        <p class="text-marketing">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat impedit labore autem, quo adipisci cupiditate magnam modi minima voluptate dolore et quisquam, omnis provident laudantium maiores ad non, dicta minus.</p>
    </section>
    <section class="opinions">
        <?php
            require'./opinion.php';
            foreach($opinions as $opinion) {
                echo "
                    <article class='article-opinion'>
                        <img class='people' src='$opinion[img]'>
                        <div>
                            <p class='name'>$opinion[name] ' from ' $opinion[from]</p>
                            <p class='review'>$opinion[review]</p>
                        </div>
                    </article>
                ";
            }
        ?>
    </section>
</html>