<?php
date_default_timezone_set("America/Mexico_City");
$root = "http://" . $_SERVER['HTTP_HOST'];
$currentDir = str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$root .= $currentDir;
$constants['base_url'] = $root;
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'php_personal');

define('SITE_URL', $constants['base_url']);
define('HTTP_BOOTSTRAP_PATH', $constants['base_url'] . 'assets/vendor/');
define('HTTP_CSS_PATH', $constants['base_url'] . 'assets/css/');
define('HTTP_JS_PATH', $constants['base_url'] . 'assets/js/');
// windows path
//define('BASH_PATH', 'C:/xampp/htdocs'.$currentDir);
// ubuntu path
//define('BASH_PATH', '/var/www'.$currentDir);
// MAC path
define('BASH_PATH', '/Applications/XAMPP/htdocs'.$currentDir);
define('ROOT_UPLOAD_PATH', BASH_PATH . 'assets/uploads/');
define('HTTP_UPLOAD_PATH', $constants['base_url'] . 'assets/uploads/');