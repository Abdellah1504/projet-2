<?php
class ServiceController {
    private $db;
    private $model;

    public function __construct($db) {
        require_once "models/Service.php";
        $this->db = $db;
        $this->model = new Service($db);
    }


 
    public function listerserviceadmin() {         
         
        $srv = $this->model->lister(); 
        include "views/services/list_admin.php";
    }

    public function lister() {         
         
        $srv = $this->model->lister(); 
        include "views/services/list.php";
    }
    public function acceuil() {         
         
      //  $srv = $this->model->lister(); 
     // include __DIR__ . "views/Acceuil.php";
      include __DIR__ . "/../views/Acceuil.php";
    }


    
    public function ajouter() {
        //Vérifie si le formulaire a été soumis en POST (soumission d’un formulaire par l’utilisateur).
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //On affecte les valeurs envoyées par l’utilisateur (dans un formulaire HTML) aux propriétés de l’objet model
            $this->model->nom = $_POST["nom"];
            $this->model->description = $_POST["description"];
            
           
            //exécute la méthode ajouter() du modèle, qui doit faire l’insertion en base de données.
            $this->model->ajouter();  
            
            //confirmation de rendez vous avec le message  "✅  Service ajouté !"
            $confirmé = "✅ Service ajouté !.";
            include "views/services/add.php";              
                
        }
        //Sinon (si pas de POST)
        else {
            //Si la requête n’est pas un POST (donc juste un accès à la page), on affiche le formulaire de saisie (services/add.php).
            include "views/services/add.php";
    }
}



    public function modifier() {
        //seul admin y accède a modifier
         
        // Si la requête est un POST →
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // On récupère l’id et les nouvelles valeurs depuis le formulaire.
            $this->model->id = $_POST["id"];
            $this->model->nom = $_POST["nom"];
            $this->model->description = $_POST["description"];            
             //On appelle modifier() pour modifier en base.
            $this->model->modifier();
            header("Location:index.php?action=listerserviceadmin");
         } else {
        // Récupérer les infos des services existant
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $query = "SELECT * FROM services WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $s= $stmt->fetch(PDO::FETCH_ASSOC);

            include "views/services/edit.php";
        }
    }
}
    public function supprimer() {
        //seul admin y accède a supprimer
         
        if (isset($_GET["id"])) {
            $this->model->id = $_GET["id"];
            $this->model->supprimer();
            header("Location: index.php?action=listerserviceadmin");
        }
    }
}
