<?php
class LoginController
{
    private string $message;

    public function index()
    {
        require 'views/home.view.php';
    }

    public function login()
    {
        // login users
        if (isset($_POST['login'])) {
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
                $_SESSION['medNaam'] = $admin->getGebruikersnaam();
                header('location: /medhome');
            } else {
                header('location: /');
            }
        }
    }
}