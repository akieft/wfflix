<?php

// session checking if you're logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){

    $id = $_SESSION['userId'];
}else{
    header("location: /");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WFFLIX - Profiel - De profiel pagina van: WFFLIX</title>
    <?php
    require "links.php";
    ?>
    <meta name="keywords" content="Profiel, HTML, CSS, JavaScript, PHP">
    <meta name="description" content="Een platform waar je kan leren programmeren door middel van video lessen.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include "navmain.php";
?>
<form class="container emp-profile">
    <div class="row">
        <div class="col-md-6">
            <div class="profile-head">
                <!-- using php echo and function htmlspecialchars to display the php variables -->
                <h5>
                    <?php echo htmlspecialchars($voornaam) ?>
                </h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tab-content profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        <label>Gebruikersnaam:</label>
                    </div>
                    <div class="col-md-6">
                        <?php echo htmlspecialchars($gebruikersnaam) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Naam:</label>
                    </div>
                    <div class="col-md-6">
                        <?php echo htmlspecialchars($voornaam) ?>
                        <?php echo htmlspecialchars($tussenvoegsel) ?>
                        <?php echo htmlspecialchars($achternaam) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email:</label>
                    </div>
                    <div class="col-md-6">
                        <?php echo htmlspecialchars($email) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
include "footer.php";
?>
</body>
</html>