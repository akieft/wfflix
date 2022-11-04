<?php


class CatBewerkController
{
    public function index()
    {
        $catBewerkModel = new CatBewerkModel();
        $categories = $catBewerkModel->allCategories();
        require 'views/catbewerk.view.php';
    }

    public function main()
    {
        if (isset($_POST["bewerken"])) {
            $categories = new CatBewerkModel();
            $categories->updateCategories($_POST['naam'], $_POST['beschrijving'], $_POST['categories']);
            header('location:/catbewerk');
        } else {
            // send back to the catbewerk page
            header('location:/catbewerk');
        }
    }
}
