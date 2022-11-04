<?php


class VideoBewerkenController
{
    public function index()
    {
        $videoBewerkModel = new VideoBewerkenModel();
        $videos = $videoBewerkModel->allVideos();
        require 'views/vidbewerk.view.php';
    }

    public function main()
    {
        if (isset($_POST["Bewerken"])) {
            $videos = new VideoBewerkenModel();
            $videos->updateVideos($_POST['link'], $_POST['title'], $_POST['beschrijving'], $_POST['videos']);
            header('location:/vidbewerk');
        } else {
            // send back to the videobewerk page
            header('location:/vidbewerk');
        }
    }
}