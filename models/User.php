<?php
class User {
    private $conn;
    private $table = "users";

    public $id;
    public $email;
    public $password;
    public $role; // "admin" ou "patient"

    public function __construct($db) {
        $this->conn = $db;
    }

    // Vérification login
    //On appelle la méthode login() du modèle User en lui passant l’email et le mot de passe.
    public function login($email, $password) {
        //Le modèle fait une requête SQL pour vérifier si l’utilisateur existe.
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $user["password"])) {
                return $user;
            }
        }
        return false;
    }
   // ***************************************
public function register($email, $password) {
    // Vérifie si email déjà utilisé
    $check = $this->conn->prepare("SELECT id FROM " . $this->table . " WHERE email = :email");
    $check->bindParam(":email", $email);
    $check->execute();
    if ($check->fetch()) {
        return false; // email déjà pris
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO " . $this->table . " (email, password, role) 
              VALUES (:email, :password, 'patient')";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hash);
    return $stmt->execute();
}


 // ***************************************
}
