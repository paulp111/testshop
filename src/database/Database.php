<?php
namespace PP\shop\Database;

class Database {
    protected \mysqli $mysqli;

    public function __construct($host, $user, $password, $database, $port) {
        $this->mysqli = new \mysqli($host, $user, $password, $database, $port);
        
        // Error handling
        if ($this->mysqli->connect_error) {
            die("Database connection failed: " . $this->mysqli->connect_error);
        }

        echo "Verbindung erfolgreich: " . $this->mysqli->host_info;
    }

    public function getMysqli(): \mysqli {
        return $this->mysqli;
    }
    //methode für select, delete, update
    public function sql_execute(string $sql): bool|\mysqli_result {
        return $this->mysqli->query($sql);
    }
/*
    public function sql_execute(string $sql, array $params = []): array|bool|\mysqli_result {
        if(empty($params)) {
            return $this->mysqli->query($sql);
        }
        $stmt = $this->mysqli->query($sql);
    }
    if (!$stmt) {
        throw new \Exception("SQL Prepare failed: " . $this->mysqli->error);
    }
    $values = [...array_values($params)];
    $stmt->execute($values);
    $result = $stmt->get_result
}
*/
}