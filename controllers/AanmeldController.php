<?php


class AanmeldController
{
    public function index()
    {

        require 'views/aanmeldpagina.view.php';
    }

    public function aanmelden()
    {
        if (isset($_POST['aanmelden'])) {
            // check if both password inputs are the same
            if ($_POST["password"] == $_POST["password2"]) {
                $user = new UserModel();
                $user->registration($_POST['naam'], $_POST['tussenvoegsel'], $_POST['achternaam'], $_POST['email'], $_POST['gebruikersnaam'], $_POST['password']);
                header('location: /main');
            } else {
                // send back to the register page
                require 'views/aanmeldpagina.view.php';
            }
            // login users
        } elseif (isset($_POST['login'])) {
            $login = new UserModel();
            $login->login($_POST['email'], $_POST['password']);
            // login admin
            $admin = new userModel();
            $admin->admin($_POST['email'], $_POST['password']);
            // users check
            if ($login->existsKlant() && $_POST['password'] == $login->getWachtwoord()) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['userId'] = $login->getKlantId();
                header('location: /main');
                // admins check
            } elseif ($admin->existsadmin() && $_POST['password'] == $admin->getWachtwoord()) {
                $_SESSION['admin'] = true;
                $_SESSION['medId'] = $admin->getMedId();
                header('location: /medhome');
            } else {
                header('location: /');
            }
        }
    }
}