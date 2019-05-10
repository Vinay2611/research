<?php

require 'predis/src/Autoloader.php';

Predis\Autoloader::register();

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host' => '127.0.0.1',
    'port' => 6379,
]);