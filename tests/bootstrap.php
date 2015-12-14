<?php
$baseDir = dirname(__DIR__);

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('php7ifytest\\', array($baseDir.'/tests/php7ify/'));
$loader->register();