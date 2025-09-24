  
## Project Title
Site Web Professionnel Pour Un Cabinet Dentaire

                   
## description
Le cabinet dentaire du Dr Dupont local spécialisé dans les solutions dentaires souhaite avoir un site web professionnel pour faire connaître ses activités et permettre aux patients de prendre des rendez-vous sans avoir à se déplacer.

## Installation
pour realiser ce projet il fallu faire les installations suivantes :

-XAMPP : environnement de développement

-phpMyadmin : application Web de gestion pour les systèmes de gestion de base de données

-draw.io : réalisation des diagrammes de classe

## Usage/Examples
Le site web est développé en PHP/MySQL tout rn appliquant l'architecture MVC :

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

## Tech Stack 
e site web a été développé en PHP/MySQL. 
Utilisation de PhpMyadmin pour créer la base donnée ainsi que les tables 
## Deployment 
To deploy this project run ```bash npm run deploy ```