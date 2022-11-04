<?php

// session checking if you're logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
}else{
    header("location: /");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WFFLIX - Contact - De Contact pagina van: WFFLIX</title>
    <?php
    require "links.php";
    ?>
    <meta name="keywords" content="Contact, Hulp, Email">
    <meta name="description" content="Een platform waar je kan leren programmeren door middel van video lessen.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include "navmain.php";
?>
<header class="contact-header">
    <h1>
        Contact
    </h1>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-contact-8">
            <h1>Algemene Info</h1>
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam sed consectetur velit, et volutpat dolor. Donec tempus tristique efficitur. Vivamus pulvinar nunc sed
                rhoncus ornare. Fusce mollis nulla quis purus dapibus, nec aliquam lorem accumsan. Ut vestibulum eros neque,
                sagittis porttitor mi ultrices a. Aliquam sed quam ac elit condimentum fermentum eget quis felis. Sed in
                justo
                finibus, pharetra nisi non, venenatis mauris. Quisque ut dapibus tellus. Pellentesque feugiat erat semper
                elit
                efficitur condimentum. Integer lacinia quam diam, nec ornare nibh aliquet eu. Cras non risus sed lectus
                volutpat
                pretium.Vivamus dapibus suscipit enim et interdum. Donec facilisis turpis eleifend mollis pellentesque.
                In sagittis tortor ut vestibulum pellentesque. Vestibulum vitae enim a turpis tincidunt fringilla. Nullam in
                enim sit amet est aliquam consectetur in id eros. Vivamus at diam dolor. Proin interdum placerat enim a
                ultricies. Quisque gravida ipsum magna, et luctus ipsum efficitur in. Etiam id tristique leo, vitae sodales
                nulla. Praesent et tortor sit amet dui feugiat pharetra vitae ac mi. Nulla facilisi.
            </p>
        </div>
        <div class="col-sm-4 col-contact-4">
            <h3>Hoofdkantoor</h3>
            <h5>WFFLIX</h5>
            <p>8668 Concord Center Dr.<br>Englewood, CO 80112</p>
            <h3>Direct Contact</h3>
            <p>
                <span>
                    Telefoon: 720.974.7878<br>Gratis Nummer: 1.877.929.7878<br>
                </span>
                Email: <a href="mailto:info@choicescreening.com">info@choicescreening.com</a>
            </p>
            <h3>Afdelingen</h3>
            <p>
                <a href="mailto:customerservice@choicescreening.com">customerservice@choicescreening.com</a><br>
                <a href="mailto:disputes@choicescreening.com">disputes@choicescreening.com</a><br>
                <a href="mailto:careers@choicescreening.com">careers@choicescreening.com</a>
            </p>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>