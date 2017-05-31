<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 5/28/17
 * Time: 1:19 PM
 */

#!- read config.ini
$ini = parse_ini_file(__DIR__ . '/../../config.ini');

# path config
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR);
define('PROJECT_PATH', $ini['project_path']);
define('APP_ROOT', PROJECT_PATH . 'app/');
define('ASSET_PATH', PROJECT_PATH . 'assets/');
