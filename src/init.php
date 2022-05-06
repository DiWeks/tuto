<?php

// Affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoload de classes
require __DIR__ . '/../vendor/autoload.php';

// Chargement des parametres
require('Configs/params.php');

define('PROTOCOL', 'http');
define('WEB_HOST', 'localhost');
define('WEB_PORT', '8080');
define('BASE_PATH', PATH.'public/');
define('PUBLIC_PATH', PROTOCOL.'://'.WEB_HOST.':'.WEB_PORT.'/'.BASE_PATH);


