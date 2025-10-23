<?php
class Horaire {
    private $conn;  // Stocke la connexion PDO à la base de données.
    private $table = "horaires";

    public $id;
    public  $jour ;
    public  $ouverture;
    public $fermeture;
     
     
//Le constructeur __construct($db) reçoit un objet PDO et le stocke dans $this->conn pour exécuter des requêtes.
    public function __construct($db) {
        $this->conn = $db;
    }


 
     
     // Lire tous les horaires
    public function readAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Mettre à jour les horaires
    public function update($id, $ouverture, $fermeture) {
        $query = "UPDATE " . $this->table . " SET ouverture=:ouverture, fermeture=:fermeture WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":ouverture", $ouverture);
        $stmt->bindParam(":fermeture", $fermeture);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
 