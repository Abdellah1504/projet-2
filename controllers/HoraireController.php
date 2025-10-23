<?php
 
 
class HoraireController {
    private $db;
    private $model;

    public function __construct($db) {
        require_once "models/Horaire.php";
        $this->db = $db;
        $this->model = new Horaire($db);
    }

 

     
    public function afficherAccueil() {
      //  $database = new Database();
       // $db = $database->getConnection();

       // $horaire = new Horaire($db);
       // $stmt = $horaire->readAll();
       // $horaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include __DIR__ . "/../views/Acceuil.php"; 
       //include '/../views/Acceuil.php';
    }

    public function afficherapropos() {
        $database = new Database();
        $db = $database->getConnection();       

         
        include 'views/a_propos.php';
    }
}

















 