
<?php
 if (session_status() === PHP_SESSION_NONE) {
           session_start();
 }  
require_once "config/database.php";
$database = new Database();
$db = $database->getConnection();

$action = $_GET["action"] ?? "login";
 
switch ($action) {
    case "login":
          
        require_once "controllers/UserController.php";
        $controller = new UserController($db);
        $controller->login();
        break;

    case "logout":
        require_once "controllers/UserController.php";
        $controller = new UserController($db);
        $controller->logout();
        break;

    case "ajouter":
        require_once "controllers/RendezVousController.php";
        $controller = new RendezVousController($db);
        $controller->ajouter();
        break;

    case "modifier":
          
        require_once "controllers/RendezVousController.php";
        $controller = new RendezVousController($db);
        $controller->modifier();
        break;

    case "supprimer":
        require_once "controllers/RendezVousController.php";
        $controller = new RendezVousController($db);
        $controller->supprimer();
        break;

    case "lister":
           
        require_once "controllers/RendezVousController.php";
        $controller = new RendezVousController($db);
        $controller->lister();
        break;
//********************************* ***************
    case "register":
        require_once "controllers/UserController.php";
        $controller = new UserController($db);
        $controller->register();
        break;
    

//********************************* ***************
}
