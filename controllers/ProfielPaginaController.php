<?php


class ProfielPaginaController
{
    //creates a new navmodel and puts all category's in the navmodel
    public function index()
    {
        $navModel = new NavModel();
        $categorien = $navModel->allCat();
        require 'views/video.view.php';
    }

    // get all profile info from the database
    public function profielInfo()
    {
        // if profilepage button has been clicked it gets all the data from the database
        if (isset($_POST['submitProfiel'])) {
            $navModel = new NavModel();
            $categorien = $navModel->allCat();
            $info = new ProfielModel();
            $info->profielSelect($_SESSION['userId']);
            $klantId = $info->getKlantId();
            $voornaam = $info->getVoornaam();
            $tussenvoegsel = $info->getTussenvoegsel();
            $achternaam = $info->getAchternaam();
            $email = $info->getEmail();
            $gebruikersnaam = $info->getGebruikersnaam();
            require 'views/profielpagina.view.php';
        }
    }
}