<?php
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    $id = $_SESSION['medId'];
}else{
    header("location: /");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta description="">
    <?php
    require "links.php";
    ?>

</head>
<!-- Navigatie balk -->
<?php
require 'mednav.php';
?>

<body class="aanmeld-body">
<section class="aanmeld-container">
    <!-- Categorie toevoeg box-->
    <div class="aanmeld-inputs">
        <h1>Categorie toevoegen</h1>
        <!-- Categorie info, voor het toevoegen van de categorie-->
        <form action="" method="POST">
            <input placeholder="Naam categorie" name="catnaam" type="text" required>
            <textarea class="beschrijving" name="catbeschr" placeholder="Beschrijving"></textarea>
            <button type="submit" name="toevoegcat">Categorie toevoegen</button>
        </form>
    </div>
</section>

<?php
require "footer.php";
?>

</body>
</html>