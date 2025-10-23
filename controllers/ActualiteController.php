<?php
class ActualiteController {
    private $db;
    private $model;

    public function __construct($db) {
        require_once "models/Actualite.php";
        $this->db = $db;
        $this->model = new Actualite($db);
    }

 
public function ajouter() {
        //Vérifie si le formulaire a été soumis en POST (soumission d’un formulaire par l’utilisateur).
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //On affecte les valeurs envoyées par l’utilisateur (dans un formulaire HTML) aux propriétés de l’objet model
            $this->model->titre = $_POST["titre"];
            $this->model->contenu = $_POST["contenu"];
            $this->model->date_publication = $_POST["date_publication"];
           // $this->model->date_publication = date('Y-m-d H:i:s');
            
            //exécute la méthode ajouter() du modèle, qui doit faire l’insertion en base de données.
            $this->model->ajouter();  
            
            //confirmation d  ajout actualité avec le message  "✅  Actualité ajoutée !"
            $confirmé = "✅ Actualité ajoutée !.";
            include "views/actualites/add.php";              
                
        }
        //Sinon (si pas de POST)
        else {
            //Si la requête n’est pas un POST (donc juste un accès à la page), on affiche le formulaire de saisie (actualites/add.php).
            include "views/actualites/add.php";
        }
    }

    public function listeractualiteadmin() {         
         
        $actu = $this->model->listeradmin(); 
        include "views/actualites/list_admin.php";
    }

    public function lister() {        
         
        $actu = $this->model->lister();
        include "views/actualites/list.php";
    }
    public function afficherapropos() {        
         
       //  include "views/a_propos.php";
      
        include __DIR__ . "/../views/a_propos.php";
    }


    public function modifier() {
        //seul admin y accède a modifier
         
        // Si la requête est un POST →
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // On récupère l’id et les nouvelles valeurs depuis le formulaire.
            $this->model->id = $_POST["id"];
            $this->model->titre = $_POST["titre"];
            $this->model->contenu = $_POST["contenu"];            
            $this->model->date_publication = $_POST["date_publication"];
             //On appelle modifier() pour modifier en base.
            $this->model->modifier();
            header("Location:index.php?action=listeractualiteadmin");
         } else {
        // Récupérer les infos des actualites existant
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $query = "SELECT * FROM actualites WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $a = $stmt->fetch(PDO::FETCH_ASSOC);

            include "views/actualites/edit.php";
        }
    }
}

public function supprimer() {
        //seul admin y accède a supprimer
         
        if (isset($_GET["id"])) {
            $this->model->id = $_GET["id"];
            $this->model->supprimer();
            header("Location: index.php?action=listeractualiteadmin");
        }
    }
}













     