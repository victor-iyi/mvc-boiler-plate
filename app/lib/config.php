<?php

# database config
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'blog');

# path config
define('APP_ROOT', pathinfo(__DIR__.DIRECTORY_SEPARATOR.'', PATHINFO_DIRNAME).DIRECTORY_SEPARATOR);
define('PROJECT_PATH', pathinfo(preg_replace('/^(.+)htdocs/', '', APP_ROOT), PATHINFO_DIRNAME).DIRECTORY_SEPARATOR);
define('ASSET_PATH', PROJECT_PATH . 'assets/');
