<?php


class CatToevoegenController
{
    public function index()
    {
        require 'views/cattoevoegen.view.php';
    }

    public function toevoegcat()
    {
        if(isset($_POST["toevoegcat"]))
        {
            $addcat = new CatToevoegenModel();
            $addcat->catadd($_POST['catnaam'], $_POST['catbeschr']);
            header('location: /cattoevoegen');
        }
    }
}