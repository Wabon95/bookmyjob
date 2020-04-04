<?php
session_start();
require '../vendor/autoload.php';

$router = new AltoRouter();
$router->map('GET', '/', 'HomeController#home');

$router->map('GET', '/sign_up', 'UserController#signUp'); // Formulaire d'inscription
$router->map('POST', '/sign_up', 'UserController#signUp'); // Traitement du formulaire d'inscription

$router->map('GET', '/sign_in', 'UserController#signIn'); // Formulaire de connexion
$router->map('POST', '/sign_in', 'UserController#signIn'); // Traitement du formulaire de connexion

$router->map('GET', '/sign_out', 'UserController#signOut'); // Déconnexion

$router->map('GET', '/job_create', 'JobController#create'); // Formulaire d'ajout d'un job
$router->map('POST', '/job_add', 'JobController#add'); // Traitement du formulaire d'ajout d'un job

if ($match = $router->match()) {
    list($controller, $action) = explode('#', $match['target']);
    $controller = "App\Controllers\\".$controller;
    $obj = new $controller();
    $obj->$action();
} elseif ($match === false) {
    header('HTTP/1.0 404 Not Found');
    echo '404';
}