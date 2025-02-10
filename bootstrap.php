<?php

require_once __DIR__ . '/autoload.php';
use PP\shop\Config\Config;
use PP\shop\Database\Shop;

(new Config());

//TODO
$database = $shop->getDatabase(); 