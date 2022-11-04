<?php
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
//    session_start();
}else{
    header("location: /");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WFFLIX - Video - De video pagina van: WFFLIX</title>
    <?php
    require "links.php";
    ?>
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="description" content="Een platform waar je kan leren programmeren door middel van video lessen.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include "navmain.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-video-7">
            <video width="100%" height="480" controls poster="img/phpbc.jpg">
                <source src="video/<?= $link ?>" type="video/mp4">
            </video>
        </div>
        <div class="col-md-3 col-video-3">
            <header class="video-header">
                <h3>
                    <?php echo htmlspecialchars($titel) ?>
                </h3>
            </header>
            <p>
                <?php echo htmlspecialchars($beschrijving) ?>
            </p>
        </div>
    </div>
</div>
<div class="container comment-margin">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 card-color">
                <div class="card-body">
                    <form action="/videos" method="POST">
                        <div>Comment:</div>
                        <input type="hidden" name="videoId" value="<?= $_POST['videoId'] ?>">
                        <input type="hidden" name="klantId" value="<?= $_SESSION['userId'] ?>">
                        <input type="hidden" name="btvideo" value="<?= $_POST ?>">
                        <textarea class="beschrijving" name="content" placeholder="Beschrijving"></textarea>
                        <button type="submit" class="btn" name="comment">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($comments as $comment) : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 card-color">
                <div class="card-body">
                    <p>
                    <?php
                    $userId = $comment['klantId'];
                    $userController = new CommentModel();
                    $userController->userSelect($userId);
                    $naam = $userController->getGebruikersnaam();
                    echo $naam;
                    ?></p>
                        <p><?= $comment['beschrijving']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php
include "footer.php";
?>
</body>
</html>