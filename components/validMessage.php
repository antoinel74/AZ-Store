<?php
    require "../views/partials/head.php";
    require "../views/partials/nav.php";

    echo"<div class='valid'>";
        echo "<p class='newmessage'>Thank you very for your message! We'll reach out to you as soon as possible!</p>";

        ?>
        <div class="btnback-cont">
            <button class="btnback" onclick='window.location.href="../index.php"'>Back Home</button>
        </div>
        <?php
    echo "</div>";
    require "../views/partials/footer.php";
?>