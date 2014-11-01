<?php

require_once __DIR__ . '/../vendor/autoload.php';

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

$application = new Zend_Application(
    'development',
    APPLICATION_PATH . '/configs/application.ini'
);

$application->bootstrap()->run();
