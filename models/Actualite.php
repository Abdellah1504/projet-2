<?php
class Actualite {
    private $conn;  // Stocke la connexion PDO à la base de données.
    private $table = "actualites";

    public $id;
    public  $titre;
    public $contenu;
    public $date_publication;
     
//Le constructeur __construct($db) reçoit un objet PDO et le stocke dans $this->conn pour exécuter des requêtes.
    public function __construct($db) {
        $this->conn = $db;
    }

 
//ajouter un nouvel enregistrement dans table actualites
    public function ajouter() {
        $query = "INSERT INTO " . $this->table . " (titre, contenu, date_publication)
                  VALUES (:titre, :contenu, :date_publication)";
     // préparer la requête avec PDO.
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":titre", $this->titre);
        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":date_publication", $this->date_publication);
        return $stmt->execute();
    }

// lister tous les éléments de la table actualites
    public function lister() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
     //Récupèrer tous les résultats de la requête sous forme de tableau associatif.
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // lister tous les éléments de la table actualites pour admin 
    public function listeradmin() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
     //Récupèrer tous les résultats de la requête sous forme de tableau associatif.
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

// mettre à jour un enregistrement existant dans la  table actualites
    public function modifier() {
        $query = "UPDATE " . $this->table . " 
                  SET titre=:titre, contenu=:contenu, date_publication=:date_publication  
                  WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":titre", $this->titre);
        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":date_publication", $this->date_publication);
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




 