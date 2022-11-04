<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Aanmelden - WFFLIX</title>

    <?php
    require "links.php";
    ?>

</head>

<?php
require 'nav.php';
?>


<body class="aanmeld-body">
<section class="aanmeld-container">
    <!-- Aanmeld box-->
    <div class="aanmeld-inputs">
        <h1>Aanmelden</h1>
        <!-- Gebruikers info, nodig voor het maken van een account-->
        <form action="" method="post">
            <input placeholder="Voornaam" name="naam" type="text" required>
            <input placeholder="Tussenvoegsel" name="tussenvoegsel" type="text">
            <input placeholder="Achternaam" name="achternaam" type="text">
            <input placeholder="E-mail" name="email" type="email" required>
            <input placeholder="Gebruikersnaam" name="gebruikersnaam" type="text" required>
            <input placeholder="Wachtwoord" name="password" type="password" required>
            <input placeholder="Herhaal wachtwoord" name="password2" type="password" required>
            <button name="aanmelden" type="submit">Log in</button>
        </form>
    </div>
</section>

<?php
require "footer.php";
?>

</body>
</html>
