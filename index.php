
<?php
 if (session_status() === PHP_SESSION_NONE) {
           session_start();
 }  
 define("BASE_URL", "http://localhost/projet_cabinet/");
require_once "config/database.php";
$database = new Database();
$db = $database->getConnection();

$action = $_GET["action"] ?? "acceuil";
 
switch ($action) {

    //utilisateur

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

        case "register":
        require_once "controllers/UserController.php";
        $controller = new UserController($db);
        $controller->register();
        break;

    //RendezVous
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
 
    
    
    //Actualite

    case "loginactualite":          
        require_once "controllers/UserController.php";
        $controller = new UserController($db);
        $controller->loginactualite();
        break;

    case "listeractualite":
        require_once "controllers/ActualiteController.php";
        $controller = new ActualiteController($db);
        $controller->lister();
        break;

    case "listeractualiteadmin":
        require_once "controllers/ActualiteController.php";
        $controller = new ActualiteController($db);
        $controller->listeractualiteadmin();
        break;

    case "ajoutactualite":
        require_once "controllers/ActualiteController.php";
        $controller = new ActualiteController($db);
        $controller->ajouter();
        break;


    case "modifactualite":          
        require_once "controllers/ActualiteController.php";
        $controller = new ActualiteController($db);
        $controller->modifier();
        break;

    case "suprimactualite":
        require_once "controllers/ActualiteController.php";
        $controller = new ActualiteController($db);
        $controller->supprimer();
        break;

    //Services
    case "loginservice":          
        require_once "controllers/UserController.php";
        $controller = new UserController($db);
        $controller->loginservice();
        break;

    case "listerservice":
        require_once "controllers/ServiceController.php";
        $controller = new ServiceController($db);
        $controller->lister();
        break;

    case "listerserviceadmin":
        require_once "controllers/ServiceController.php";
        $controller = new ServiceController($db);
        $controller->listerserviceadmin();
        break;

    case "ajoutservice":
        require_once "controllers/ServiceController.php";
        $controller = new ServiceController($db);
        $controller->ajouter();
        break;

    case "modifservice":          
        require_once "controllers/ServiceController.php";
        $controller = new ServiceController($db);
        $controller->modifier();
        break;

    case "suprimaservice":
        require_once "controllers/ServiceController.php";
        $controller = new ServiceController($db);
        $controller->supprimer();
        break;

      //horraire

      case "loginhoraire":          
        require_once "controllers/UserController.php";
        $controller = new UserController($db);
        $controller->loginhoraire();
        break;
    case 'admin':
        require_once 'controllers/AdminController.php';
        $controller = new AdminController();
        $controller->afficherAdmin();
        break;

    case 'acceuil':
        require_once "controllers/ServiceController.php";
        $controller = new ServiceController($db);
        $controller->acceuil();
        break;


    case 'listerhoraire':
        require_once 'controllers/AdminController.php';
        $controller = new AdminController();
        $controller->afficheredit();
        break;

    case 'a_propos':
       require_once "controllers/ActualiteController.php";
        $controller = new ActualiteController($db);
        $controller->afficherapropos();
        break;


    

 
}
