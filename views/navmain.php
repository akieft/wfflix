<!-- the navbar when you're logged in-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <form>
        <a href="/main"><img src="../img/WFFLIX.png" alt="WFFLIX logo" width="200" height="50"/></a>
    </form>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- collection of nav links,forms and other content -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <div class="dropdown">
                <div class="nav-item nav-link ">Categorieën</div>
                <div class="dropdown-content">
                    <!-- foreech loop that loops the name of the category's -->
                    <?php foreach ($categorien as $catogorie) { ?>
                        <div class="nav-item nav-link" data-toggle="modal"
                             data-target="#<?= $catogorie['naam'] ?>"><?= $catogorie['naam'] ?></div>
                    <?php } ?>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown login-dropdown">
                <form method="post" action="/profielpagina">
                    <input type="hidden" name="klantId" value="1">
                    <button type="submit" name="submitProfiel" value="submit" class="link-button">
                        <p>Profielpagina</p>
                    </button>
                </form>
            </div>
        </div>
        <div>
            <form class="form-inline login-form" action="/logout" method="post">
                <button type="submit" class="btn-register">Logout</button>
            </form>
        </div>
    </div>
</nav>

<!-- foreach loop which loops the modal for PHP, HTML, CSS, JS -->
<?php foreach ($categorien as $catogorie) { ?>
    <div class="modal fade" id="<?= $catogorie['naam'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel"><?= $catogorie['naam'] ?></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Tutorials:</p>
                    <ul class="list-group">

                        <!-- foreach loop loops all videos and put them in the correct (modal) category
                             with the correct info   -->
                        <?php
                        $catId = $catogorie['catId'];
                        $videos = $navModel->allVideos($catId);
                        foreach ($videos as $video) {
                            ?>
                            <!-- video containers -->
                            <!-- form-tag+button makes the div clickable -->
                            <form action="/videos" method="post">
                                <button class="video-button" type="submit" name="btvideo" value="submit">
                                    <input type="hidden" name="videoId" value="<?= $video['videoId'] ?>">
                                    <div class="post-container">
                                        <div class="post-thumb">
                                            <img src="img/<?= $catogorie['naam'] ?>bc.jpg"/>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title"><?= $video['titel'] ?></h3>
                                            <p class="des-content"></p>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        <?php } ?>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>