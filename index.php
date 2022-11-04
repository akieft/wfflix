<?php
session_start();
require "models/BaseModel.php";
require "models/UserModel.php";
require "models/VideoModel.php";
require "models/ProfielModel.php";
require "models/NavModel.php";
require "models/VideoBewerkenModel.php";
require "models/VideoVerwijderModel.php";
require "models/VideoToevoegenModel.php";
require "models/CatVerwijderModel.php";
require "models/CatToevoegenModel.php";
require "models/CatBewerkModel.php";
require "models/RecentModel.php";
require "models/CommentModel.php";
require "controllers/HomeController.php";
require "controllers/AanmeldController.php";
require "controllers/LoginController.php";
require "controllers/LogoutController.php";
require "controllers/VideoController.php";
require "controllers/ProfielPaginaController.php";
require "controllers/ContactController.php";
require "controllers/VideoVerwijderController.php";
require "controllers/VideoBewerkenController.php";
require "controllers/VideoToevoegenController.php";
require "controllers/CatToevoegenController.php";
require "controllers/MainController.php";
require "controllers/MedHomeController.php";
require "controllers/CatVerwijderController.php";
require "controllers/CatBewerkController.php";
require 'core/Router.php';

$router = new Router();
require 'core/routes.php';

$router->direct();