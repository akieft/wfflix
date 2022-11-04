<?php


class CatVerwijderController
{
    public function index()
    {
        $catVerwijderModel = new CatVerwijderModel();
        $categories = $catVerwijderModel->allCategories();
        require 'views/catverwijder.view.php';
    }

    public function catverwijderen()
    {
        if(isset($_POST["catverwijderen"]))
        {
            $categories = new CatVerwijderModel();
            $categories->catverwijderen($_POST['catverwijder']);
            header('location:/catverwijder');
        }
    }
}