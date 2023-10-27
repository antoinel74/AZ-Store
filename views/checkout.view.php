<html>

<?php

require "../views/partials/head.php";
include "../views/partials/nav.php";

echo '<div class="checkout-container">';
include "../components/cart.php";
include "../components/checkout.php";
echo '</div>';

include "../views/partials/footer.php";

?>

</html>