<?php
$router->define([
    'GET' => [
        '/' => [
            'controller' => 'HomeController',
            'method' => 'index'
        ],
        '/aanmelden' => [
            'controller' => 'AanmeldController',
            'method' => 'index'
        ],
        '/contact' => [
            'controller' => 'ContactController',
            'method' => 'index'
        ],
        '/vidverwijder' => [
            'controller' => 'VideoVerwijderController',
            'method' => 'index'
        ],
        '/vidbewerk' => [
            'controller' => 'VideoBewerkenController',
            'method' => 'index'
        ],
        '/vidtoevoegen' => [
            'controller' => 'VideoToevoegenController',
            'method' => 'index'
        ],
        '/cattoevoegen' => [
            'controller' => 'CatToevoegenController',
            'method' => 'index'
        ],
        '/main' => [
            'controller' => 'MainController',
            'method' => 'index'
        ],
        '/medhome' => [
            'controller' => 'MedHomeController',
            'method' => 'index'
        ],
        '/catverwijder' => [
            'controller' => 'CatVerwijderController',
            'method' => 'index'
        ],
        '/catbewerk' => [
            'controller' => 'CatBewerkController',
            'method' => 'index'
        ]
    ],
    'POST' => [
        '/aanmelden' => [
            'controller' => 'AanmeldController',
            'method' => 'aanmelden'
        ],
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'login'
        ],
        '/videos' => [
            'controller' => 'VideoController',
            'method' => 'videoInfo'
        ],
        '/profielpagina' => [
            'controller' => 'ProfielPaginaController',
            'method' => 'profielInfo'
        ],
        '/logout' => [
            'controller' => 'LogoutController',
            'method' => 'logout'
        ],
        '/vidbewerk' => [
            'controller' => 'VideoBewerkenController',
            'method' => 'main'
        ],
        '/vidverwijder' => [
            'controller' => 'VideoVerwijderController',
            'method' => 'verwijderen'
        ],
        '/vidtoevoegen' => [
            'controller' => 'VideoToevoegenController',
            'method' => 'toevoegen'
        ],
        '/cattoevoegen' => [
            'controller' => 'CatToevoegenController',
            'method' => 'toevoegcat'
        ],
        '/catverwijder' => [
            'controller' => 'CatVerwijderController',
            'method' => 'catverwijderen'
        ],
        '/catbewerk' => [
            'controller' => 'CatBewerkController',
            'method' => 'main'
        ]
    ]
]);