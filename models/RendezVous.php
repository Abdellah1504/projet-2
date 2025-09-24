<?php
class RendezVous {
    private $conn;
    private $table = "rendezvous";

    public $id;
    public $patient;
    public $date;
    public $heure;
    public $motif;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function ajouter() {
        $query = "INSERT INTO " . $this->table . " (patient, date, heure, motif)
                  VALUES (:patient, :date, :heure, :motif)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":patient", $this->patient);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":heure", $this->heure);
        $stmt->bindParam(":motif", $this->motif);
        return $stmt->execute();
    }

    public function lister() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifier() {
        $query = "UPDATE " . $this->table . " 
                  SET patient=:patient, date=:date, heure=:heure, motif=:motif 
                  WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":patient", $this->patient);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":heure", $this->heure);
        $stmt->bindParam(":motif", $this->motif);
        return $stmt->execute();
    }

    public function supprimer() {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $this->id);
        return $stmt->execute();
    }
}
