<?php
    require "./views/partials/head.php";
    require "./views/partials/nav.php";
    if (isset($_POST['name'], $_POST['mail'], $_POST['message'])) {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];

        // process the form data here

        // display the data to the user
        echo "<p>You entered your name: " . $name . ",</p><br>";
        echo "<p>Email: " . $mail . ",</p><br>";
        echo "<p>and your message: " . $message . "</p><br>";
        echo "<p class='space'>Is that correct? </p><br>";
        echo "<input class='btn' type='submit' name='submit' value='Yes'/>";
        ?>
        <button class="btn" onclick='window.location.href="index.php"'>No</button>
<?php

    }

    require "./views/partials/footer.php";
?>