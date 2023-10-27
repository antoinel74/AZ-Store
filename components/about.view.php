<?php
    require __DIR__ . "/../views/partials/head.php";
    require __DIR__ .  "/../views/partials/nav.php";
    require __DIR__ . "/../components/about.php";
    echo "<div class='reviews'>
            <h2>Check our reviews</h2>";
                require __DIR__ . "/components/carousel.php";
                echo "</div>";
    require __DIR__ . "/../views/partials/footer.php";
?>
</html>