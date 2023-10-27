<?php
    echo "<section class='opinions'>";
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
    echo "</section>";
?>