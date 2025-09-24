<?php
   

//déclarer une classe UserController : c’est le contrôleur qui va gérer la connexion et la déconnexion des utilisateurs.

class UserController {
  //propriété privée : la connexion à la base de données (objet PDO).
    private $db;
  //propriété privée : le modèle utilisateur (classe User) qui fait les requêtes SQL.
    private $model;
    
    //Le constructeur :
    public function __construct($db) {
       if (session_status() === PHP_SESSION_NONE) {
           session_start();
        }       
      //Il inclut le fichier du modèle User.php.
        require_once "models/User.php";
      // Il stocke la connexion $db.
        $this->db = $db;
      //Il instancie un objet User et le met dans $this->model → ainsi, le contrôleur peut appeler directement les méthodes du modèle
        $this->model = new User($db);
    }
   // La méthode login() pour gérer la connexion.
    public function login() {
    //Si la requête est un POST, cela signifie qu’un formulaire de connexion a été soumis
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //On récupère les champs saisis par l’utilisateur dans le formulaire (email et password).
            $email = $_POST["email"];
            $password = $_POST["password"];
    //On appelle la méthode login() du modèle User en lui passant l’email et le mot de passe.
            $user = $this->model->login($email, $password);
    //Le modèle fait une requête SQL pour vérifier si l’utilisateur existe. 
    //Si $user existe (connexion réussie) :  
            if ($user) {
    //On enregistre les infos de l’utilisateur dans $_SESSION["user"] pour qu’il reste connecté.
                $_SESSION["user"] = $user;
                echo "$user ==== "; $user;
                header("Location: index.php?action=lister");
            } else {
                echo "Email ou mot de passe incorrect.";
            }
        } else {
            include "views/login.php";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
    }

    // ********************************************
    public function register() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = trim($_POST["email"]);
        $password = $_POST["password"];

        if ($this->model->register($email, $password)) {
            // Après inscription, on connecte directement le patient
            $user = $this->model->login($email, $password);
            $_SESSION["user"] = $user;
            header("Location: index.php?action=login");
          
            exit;
        } else {
            $error = "Cet email est déjà utilisé.";
            include "views/register.php";
        }
    } else {
        include "views/register.php";
    }
}

    //********************************************* 
}
