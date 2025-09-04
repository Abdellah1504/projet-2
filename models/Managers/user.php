<?php
require_once "config/Database.php";

class User {
    private $conn;
    private $table = "users";

    public $id;
    public $username;
    public $password;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Vérifier login
    public function login($username, $password) {
        $sql = "SELECT * FROM " . $this->table . " WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }
}
