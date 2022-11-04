<?php


class VideoToevoegenController
{
    public function index()
    {
        $vidToevoegModel = new VideoToevoegenModel();
        $categorien = $vidToevoegModel->allCat();
        require 'views/vidtoevoegen.view.php';
    }

    public function toevoegen()
    {
        if(isset($_POST["toevoegen"]))
        {
            $vidadd = new VideoToevoegenModel();
            $vidadd->toevoeg($_POST['vidlink'], $_POST['vidnaam'], $_POST['vidbeschr'], $_POST['vidcat']);
            header('location: /vidtoevoegen');
        }
    }
}