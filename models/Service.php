
<?php
class Service {
    private $conn;  // Stocke la connexion PDO à la base de données.
    private $table = "services";  

    public $id;
    public  $nom;
    public $description;
     
     
//Le constructeur __construct($db) reçoit un objet PDO et le stocke dans $this->conn pour exécuter des requêtes.
    public function __construct($db) {
        $this->conn = $db;
    }


//ajouter un nouvel enregistrement dans table rendezvous
    public function ajouter() {
        $query = "INSERT INTO " . $this->table . " (nom, description )
                  VALUES (:nom, :description)";
     // préparer la requête avec PDO.
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":description", $this->description);
         
        
        return $stmt->execute();
    }

// lister tous les éléments de la table services
    public function lister() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
     //Récupèrer tous les résultats de la requête sous forme de tableau associatif.
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

// mettre à jour un enregistrement existant dans la  table services
    public function modifier() {
        $query = "UPDATE " . $this->table . " 
                  SET nom=:nom, description=:description   
                  WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":description", $this->description);
         
         return $stmt->execute();
    }


// supprimer une ligne de la table avec   l’identifiant (id)
    public function supprimer() {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}









