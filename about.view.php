<?php
    require "./views/partials/head.php";
    require "./views/partials/nav.php";
    require "./components/about.php";
    echo "<div class='reviews'>
            <h2>Check our reviews</h2>";
                require "./components/carousel.php";
                echo "</div>";
    require "./views/partials/footer.php";
?>
</html>