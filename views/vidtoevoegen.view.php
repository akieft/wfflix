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
    <!-- Video toevoeg box-->
    <div class="aanmeld-inputs">
        <h1>Video toevoegen</h1>
        <!-- Video info, voor het toevoegen van de video-->
        <form action="" method="POST">
            <input placeholder="Titel video" name="vidnaam" type="text" required>
            <input placeholder="Link video" name="vidlink" type="text" required>
            <textarea class="beschrijving" name="vidbeschr" placeholder="Beschrijving"></textarea>
            <label for="vidcat" class="none">Categorie:</label>
            <select name="vidcat">
                <?php foreach($categorien as $category) : ?>
                <option value="<?= $category['catId'] ?>"><?= $category['naam'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="toevoegen">Video toevoegen</button>
        </form>
    </div>
</section>

<?php
require "footer.php";
?>

</body>
</html>
