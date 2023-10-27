<?php
    require "../views/partials/head.php";
    require "../views/partials/nav.php";
    if (isset($_POST['name'], $_POST['mail'], $_POST['message'])) {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];

        // process the form data here

        // display the data to the user
        
        echo "<div class='textinfo'>";
            echo "<p class='contactinfo'>You entered your name: " . $name . ",</p><br>";
            echo "<p class='contactinfo'>Email: " . $mail . ",</p><br>";
            echo "<p class='contactinfo'>and your message: " . $message . "</p><br>";
            echo "<p class='space'>Is that correct? </p><br>";
        echo "</div>";
        ?>
        <!-- <form method='post'> -->
        <div class="btns-cont">
            <button class='btns' onclick='window.location.href="./validMessage.php"'>Yes</button>
        <!-- </form> onclick button qui envoie sur une nouvelle page avec un bouton qui permet de retourner sur la page principale -->
        <!--<?php
        // if ($_POST['submit']==='Yes') {
        //     echo "<p class='newmessage'>Thank you very for your message! We'll reach out to you as soon as possible!</p>";
        // } else {
        //     echo "<p class='newmessage'>Not Working</p>";
        // }
        // ?>
        -->
            <button class="btns" onclick='window.location.href="./contact.view.php"'>No</button>
        </div>
        <?php
    }

    require "../views/partials/footer.php";
    ?>