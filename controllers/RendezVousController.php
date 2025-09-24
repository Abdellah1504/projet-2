<?php
class RendezVousController {
    private $db;
    private $model;

    public function __construct($db) {
        require_once "models/RendezVous.php";
        $this->db = $db;
        $this->model = new RendezVous($db);
    }

    public function ajouter() {
        //Vérifie si le formulaire a été soumis en POST (soumission d’un formulaire par l’utilisateur).
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //On affecte les valeurs envoyées par l’utilisateur (dans un formulaire HTML) aux propriétés de l’objet model
            $this->model->patient = $_POST["patient"];
            $this->model->date = $_POST["date"];
            $this->model->heure = $_POST["heure"];
            $this->model->motif = $_POST["motif"];
            //exécute la méthode ajouter() du modèle, qui doit faire l’insertion en base de données.
            $this->model->ajouter();  
            
            //confirmation de rendez vous avec le message  "✅ Rendez-vous confirmé !"
           
            include "views/rendezvous_form.php";
             echo "✅ Rendez-vous confirmé !";     
        }
        //Sinon (si pas de POST)
        else {
            //Si la requête n’est pas un POST (donc juste un accès à la page), on affiche le formulaire de saisie (rendezvous_form.php).
            include "views/rendezvous_form.php";
        }
    }

    public function lister() {
         
         
        $rvs = $this->model->lister();
        include "views/rendezvous_list.php";
    }

    public function modifier() {
        //seul admin y accède a modifier
         if ($_SESSION["user"]["role"] !== "admin") {
        die("Accès refusé : seuls les administrateurs peuvent modifier un rendez-vous.");
    }
        // Si la requête est un POST →
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // On récupère l’id et les nouvelles valeurs depuis le formulaire.
            $this->model->id = $_POST["id"];
            $this->model->patient = $_POST["patient"];
            $this->model->date = $_POST["date"];
            $this->model->heure = $_POST["heure"];
            $this->model->motif = $_POST["motif"];
            //On appelle modifier() pour modifier en base.
            $this->model->modifier();
            header("Location:index.php?action=lister");
         } else {
        // Récupérer les infos du rendez-vous existant
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $query = "SELECT * FROM rendezvous WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $rv = $stmt->fetch(PDO::FETCH_ASSOC);

            include "views/rendezvous_edit.php";
        }
    }
}

    public function supprimer() {
        //seul admin y accède a supprimer
        if ($_SESSION["user"]["role"] !== "admin") {
        die("Accès refusé : seuls les administrateurs peuvent supprimer un rendez-vous.");
    }
        if (isset($_GET["id"])) {
            $this->model->id = $_GET["id"];
            $this->model->supprimer();
            header("Location: index.php?action=lister");
        }
    }
}
