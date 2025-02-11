<?php
namespace PP\shop\Database; //Database folder

class Shop {
    protected Database $database;
    protected Category $category;
    protected Product $product;
    protected Role $role;
    protected Image $img;
    protected User $user;

    public function __construct(string $host, string $username, string $password, string $database, int $port) {
        $this->database = new Database($host, $username, $password, $database, $port);
    }

    public function getDatabase(): Database {
        return $this->database;
    }
    public function getRole() {
        if(empty($this->role)) {
            $this->role = new Role($this->database);
        }
        return $this->role;
    }
}
