<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WFFLIX - Home - De Home pagina van: WFFLIX </title>
    <?php
    require "links.php";
    ?>
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="description" content="Een platform waar je kan leren programmeren door middel van video lessen.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include "nav.php";
?>
<nav>
    <img class="banner" src="img/LTC.png" alt="Learn to code banner">
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lang-4">
            <div class="titleBlock">
                <h2>PHP</h2>
            </div>
            <div class="textStyle">
                <p>PHP is een scripttaal, die bedoeld is om op webservers dynamische webpagina's te creëren.</p>
            </div>
        </div>
        <div class="col-md-4 col-lang-4">
            <div class="titleBlock">
                <h2>HTML</h2>
            </div>
            <div class="textStyle">
                <p">HyperText Markup Language is een opmaaktaal voor de specificatie van documenten,
                voornamelijk bedoeld voor het wereldwijde web.</p>
            </div>
        </div>
        <div class="col-md-4 col-lang-4">
            <div class="titleBlock">
                <h2>CSS</h2>
            </div>
            <div class="textStyle">
                <p">Cascading Style Sheets, zijn een mogelijkheid om de vormgeving van webpagina's los te
                koppelen van hun feitelijke inhoud en centraal vast te leggen.</p>
            </div>
        </div>
        <div class="col-md-4  col-lang-4">
            <div class="titleBlock">
                <h2>JS</h2>
            </div>
            <div class="textStyle">
                <p>JavaScript is een veelgebruikte scripttaal om webpagina's interactief te
                    maken en webapplicaties te ontwikkelen.</p>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>