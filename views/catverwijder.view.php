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
    <title>catverwijder</title>
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
<!-- Categorie verwijderen -->
<section class="aanmeld-container">
    <div class="aanmeld-inputs">
        <h1 class="t-a-c">Categorie verwijderen</h1>
    <form action="" method="post">
        <label for="catverwijder" class="">Verwijderen</label>
        <select name="catverwijder" class="">
           <?php foreach ($categories as $category) : ?>
            <option value="<?= $category['catId'] ?>"><?= $category['naam'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="catverwijderen">Verwijder</button>
    </form>
    </div>
</section>
<?php
require "footer.php";
?>

</body>
</html>