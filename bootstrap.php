<?php

require_once __DIR__ . '/autoload.php';
use PP\shop\Config\Config;
use PP\shop\Database\Shop;

(new Config());

//TODO
$shop = new Shop(
    Config::DB_HOST, 
    Config::DB_USER, 
    Config::DB_PASSWORD,
    Config::DB_DATABASE, 
    Config::DB_PORT
);

$database = $shop->getDatabase(); 