<?php

require 'predis/src/Autoloader.php';

Predis\Autoloader::register();

$client = new Predis\Client();

echo $value = $client->get('message');