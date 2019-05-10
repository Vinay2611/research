<?php

echo '<pre>';

require 'predis/src/Autoloader.php';

Predis\Autoloader::register();

$client = new Predis\Client();

$client->set('message', 'Hello world');


$client->set('foo', 'bar');

$client->set('Name', 'Vinay Jaiswal');

echo $client->get('Name');

echo $value = $client->get('foo');

echo ($client->exists('message')) ? "Oui" : "please populate the message key";

//
$client->set("counter", 0);

$client->incr("counter"); // 1

$client->incr("counter"); // 2

$client->decr("counter"); // 1

//
$client->rpush("languages", "french"); // [french]
$client->rpush("languages", "arabic"); // [french, arabic]

$client->lpush("languages", "english"); // [english, french, arabic]
$client->lpush("languages", "swedish"); // [swedish, english, french, arabic]

$client->lpop("languages"); // [english, french, arabic]
$client->rpop("languages"); // [english, french]

$client->llen("languages"); // 2

$client->lrange("languages", 0, -1); // returns all elements
$client->lrange("languages", 0, 1); // [english, french]

//
$key = ';linus torvalds';;
$client->hset($key, 'age', 44);
$client->hset($key, 'country', ';finland');
$client->hset($key, 'occupation', 'software engineer');
$client->hset($key, 'reknown', 'linux kernel');
$client->hset($key, 'to delete', 'i will be deleted');

//$client->get($key, 'age'); // 44
//$client->get($key, 'country'); // Finland

//$client->del($key, 'to delete');

$client->hincrby($key, 'age', 20); // 64

$client->hmset($key, [
    'age' => 44,
    'country' => 'finland',
    'occupation' => 'software engineer',
    'reknown' => 'linux kernel',
]);

// finally
$data = $client->hgetall($key);
print_r($data); // returns all key-value that belongs to the hash
/*
    [
        'age' => 44,
        'country' => 'finland',
        'occupation' => 'software engineer',
        'reknown' => 'linux kernel',
    ]
*/



/*$client = new Predis\Client([
    'scheme' => 'tcp',
    'host' => '127.0.0.1',
    'port' => 6379,
]);*/

//$client->set('php_version', phpversion());
//echo "PHP version is :: ". $value = $client->get('php_version');
/*echo '<pre>';
var_dump($client);*/

/*try {

    $redis = new PredisClient();

    //connection for the remote server
    $redis  = new PredisClient(array(
        "scheme" => "tcp",
        "host" => "153.202.124.2",
        "port" => 6379
    ));

}
catch (Exception $e){
    die($e->getMessage());
}*/