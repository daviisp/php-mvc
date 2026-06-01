<?php

session_start();

define('BASE_URL', 'http://localhost/projeto/public/');

require_once '../config/config.php';
require_once '../core/Database.php';
require_once '../core/Controller.php';
require_once '../core/App.php';

$app = new App();
