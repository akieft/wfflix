<?php
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    $id = $_SESSION['medId'];
    $naam = $_SESSION['medNaam'];
}else{
    header("location: /");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>medhome</title>
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
<h1 class="t-a-c welkom">Welkom <?= $naam ?>!</h1>

<!-- Footer -->
<?php
require "footer.php";
?>
</body>
</html>