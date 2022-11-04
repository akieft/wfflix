<?php


class LogoutController
{

    public function index()
    {
        require 'views/home.view.php';
    }

    //function for the logout
    public function logout()
    {
        session_start(); //to ensure you are using same session
        session_destroy(); //destroy the session
        header("location:/"); //to redirect back to "/" after logging out
        exit();
    }
}