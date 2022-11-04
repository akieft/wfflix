<!-- Login session -->
<?php

// session checking if you're logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
}else{
    header("location: /");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main</title>
        <meta description="">

        <!-- Links -->
        <?php
        require "links.php";
        ?>
    </head>

    <!-- Navigatie balk -->
    <?php
    require 'navmain.php';
    ?>

    <!-- Content of the page-->
    <body>

    <!-- Main Header-->
    <header><h1 class="mainh1">Recente videos</h1></header>
        <div class="album py-5">
            <div class="container">
                <div class="row">

            <!-- foreach recent video's -->
            <?php foreach ($recent as $current) : ?>
                <div class="col-md-5 col-video-main">
                    <header class="video-header1">
                        <h3>
                            <?= $current['titel'] ?>
                        </h3>
                    </header>
                    <video width="100%" height="180" controls poster="img/phpbc.jpg">
                        <source src="video/test.mp4" type="video/mp4">
                    </video>
                    <p class="beschrijving-kort">
                        <?= $current['beschrijving'] ?>
                    </p>
                </div>
            <?php endforeach; ?>

                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php
    require "footer.php";
    ?>

    </body>
</html>