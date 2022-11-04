<?php


class ContactController
{
    public function index()
    {
        $navModel = new NavModel();
        $categorien = $navModel->allCat();
        require 'views/contact.view.php';
    }
}