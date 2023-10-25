<html>
<link rel="stylesheet" href="../assets/style/style.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap");
</style>

<body>
    <section class="index">
        <div class="intro">
            <h2>Shoe the right <span class="blue">one</span>.</h2>
            <button class="see-store">See our store</button>
        </div>
        <div class="images">
            <img class="logo" src="../assets/img/Nike-logo.svg">
            <img class="shoe" src="../assets/img/shoe_one.png">
        </div>
    </section>

    <section class="latest-product">
        <div class="product-section">
            <h3><span class="blue">Our</span> last products</h3>
            <div class="products">
                <?php
                require "components/products.php"; //inclure un dossier php ici pour récupérer le code du product.php
                ?>
            </div>
        </div>
    </section>

    <section class="marketing">
        <img class="shoe" src="../assets/img/shoe_two.png">
        <h2 class="provide">We provide you the <span class="blue">best</span> quality.</h2>
        <p class="text-marketing">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat impedit labore autem, quo adipisci cupiditate magnam modi minima voluptate dolore et quisquam, omnis provident laudantium maiores ad non, dicta minus.</p>
    </section>

    <section class="opinions">
        <?php
        require "opinion.php";
        foreach ($opinions as $opinion) {
            echo "
                        <article class='article-opinion'>
                            <img class='people' src='$opinion[img]'>
                            <div>
                                <p class='name'>$opinion[name] from $opinion[from]</p>
                                <p class='review'>$opinion[review]</p>
                            </div>
                        </article>
                    ";
        }
        ?>
    </section>
</body>

</html>