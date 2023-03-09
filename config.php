<?php

# DATABASE
define('DB_NAME', 'mapa-teste');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');

# STATUS
define('STATUS', [
  1 => 'Aguardando análise'
]);

# HOME URL
$domain = $_SERVER["SERVER_NAME"];
$baseUrl = preg_replace("/" . basename($_SERVER["SCRIPT_NAME"]) . "/", "", $_SERVER["SCRIPT_NAME"]);

define("URL", "http://{$domain}{$baseUrl}");

# PATHS
define('SRC_PATH', __DIR__ . '/src');
define('VIEW_PATH', SRC_PATH . '/views');

require __DIR__ . '/src/includes/functions.php';
require __DIR__ . '/src/includes/connection.php';
