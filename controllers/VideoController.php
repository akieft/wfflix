<?php


class VideoController
{
    // gets the video info from the database
    public function videoInfo()
    {
        if (isset($_POST['btvideo'])) {
            $navModel = new NavModel();
            $categorien = $navModel->allCat();
            $video = new VideoModel();
            $video->videoSelect($_POST['videoId']);
            $link = $video->getLink();
            $titel = $video->getTitel();
            $beschrijving = $video->getBeschrijving();
            $commentController = new CommentModel();
            if (isset($_POST['comment'])) {
                $commentController->insertComment($_POST['content'], $_POST['klantId'], $_POST['videoId']);
            }
            $comments = $commentController->commentSelect($_POST['videoId']);

            require 'views/video.view.php';
        }
    }
}