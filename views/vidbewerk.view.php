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
        <h1>Video bewerken</h1>
        <!-- Input voor het bewerken van video gegevens-->
        <form action="" method="post">
            <input placeholder="Titel video" name="title" type="text" required>
            <input placeholder="Link video" name="link" type="text">
            <textarea class="beschrijving" placeholder="Beschrijving" name="beschrijving"></textarea>

            <label class="none" for="videos"> </label>
            <select name="videos">
                <?php foreach ($videos as $video) : ?>
                <option value="<?= $video['videoId'] ?>"><?= $video['titel'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="Bewerken">Bewerken</button>
        </form>
    </div>
</section>

<?php
require "footer.php";
?>

</body>
</html>