<?php


class MainController
{
    public function index()
    {
        $navModel = new NavModel();
        $categorien = $navModel->allCat();
        $recentVideos = new RecentModel();
        $recent = $recentVideos->recentVideos();
        require 'views/main.view.php';
    }
}