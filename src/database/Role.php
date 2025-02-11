<?php
namespace PP\shop\Database;

class Role {
    protected Database $db;
    public function __construct(Database $database) {
        $this->db = $database;
    }

    public function saveRole(string $role) {
        $sql = "INSERT INTO roles (name) VALUES (?)";
        return $this->db->sql_execute($sql, ['name' => $role]);
    }
    public function fetchAll(): array {
        $sql = "SELECT name FROM roles";
        try {
            $result = $this->db->sql_execute($sql);

            if ($result instanceof \mysqli_result) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return []; 
        } catch (\Exception $e) {
            return ["error" => $e->getMessage()];
        }
    }
}