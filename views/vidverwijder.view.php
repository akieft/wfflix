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
    <title>medverwijder</title>
    <meta description="">
    <?php
    require "links.php";
    ?>
</head>
<!-- Navigation bar -->
<?php
require 'mednav.php';
?>
<body>
<!-- Removing a video for staff members -->
<section class="aanmeld-container">
    <div class="aanmeld-inputs">
        <h1>Video verwijderen</h1>
    <form action="" method="POST">
        <label for="verwijder" class="">Verwijderen</label>
        <select name="verwijder" class="verselect">
            <!-- Foreach loop for removing videos -->
            <?php foreach ($videos as $video) : ?>
            <option value="<?= $video['videoId'] ?>"><?= $video['titel'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="verwijderen">Verwijder</button>
    </div>
    </form>
</section>
<!-- Footer -->
<?php
require "footer.php";
?>
</body>
</html>