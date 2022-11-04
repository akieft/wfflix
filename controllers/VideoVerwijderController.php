<?php


class VideoVerwijderController
{
    public function index()
    {
        $videoVerwijderModel = new VideoVerwijderModel();
        $videos = $videoVerwijderModel->allVideos();
        require 'views/vidverwijder.view.php';
    }

    public function verwijderen()
    {
        if(isset($_POST["verwijderen"]))
        {
            $vidadd = new VideoVerwijderModel();
            $vidadd->verwijderen($_POST['verwijder']);
            header('location: /vidverwijder');
        }
    }
}