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


    <!-- bewerk box-->
    <div class="aanmeld-inputs">
        <h1>Categorie bewerken</h1>
        <!-- Input voor het bewerken van video gegevens-->
        <form action="" method="post">
            <input placeholder="Naam categorie" name="naam" type="text" required>
            <textarea class="beschrijving" placeholder="Beschrijving" name="beschrijving"></textarea>

            <label class="none" for="categories"> </label>
            <select name="categories">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['catId'] ?>"><?= $category['naam'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="bewerken">Bewerken</button>
        </form>
    </div>
</section>

<?php
require "footer.php";
?>

</body>
</html>