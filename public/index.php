<?php

use PP\shop\Helper\Render;
use PP\shop\Config\Config;
use PP\shop\Database\Shop;
use PP\shop\Database\Database;

require_once __DIR__ . '/../bootstrap.php';

$config = new Config();

// Shop Instanz aus der Config
$shop = new Shop(
    Config::DB_HOST,
    Config::DB_USER,
    Config::DB_PASSWORD,
    Config::DB_DATABASE,
    Config::DB_PORT
);

// testing 
$db = new Database(
    Config::DB_HOST,
    Config::DB_USER,
    Config::DB_PASSWORD,
    Config::DB_DATABASE,
    Config::DB_PORT
);

// DELETE
$delete = $db->sql_execute("DELETE FROM users WHERE id = 5");
echo $delete ? "<p>Deleted user with id 5</p>" : "<p>No user deleted</p>";

// UPDATE
$update = $db->sql_execute("UPDATE users SET email = 'test@mail.com' WHERE id = 1");
echo $update ? "<p>Updated user with id 1</p>" : "<p>No user updated</p>";

// SELECT 
$select = $db->sql_execute("SELECT * FROM users WHERE id = 4");

if ($select && $select->num_rows > 0) {
    echo "<p>Selected user with id 4</p>";
} else {
    echo "<p>No user selected</p>";
}

$heading = "Testüberschrift";

Render::render('../src/Views/index.view.php', [
    'heading' => $heading,
    'count' => 5
]);