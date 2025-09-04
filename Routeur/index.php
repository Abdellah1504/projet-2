
<?php
// Exemple d'utilisation (dans un fichier index.php par exemple)
require_once 'Controller.php';

// Détermine l'action à effectuer (par exemple, via une URL)
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Crée une instance du contrôleur
$controller = new Controller();

// Vérifie si l'action existe dans le contrôleur
if (method_exists($controller, $action)) {
    // Exécute l'action
    $controller->$action();
} else {
    // Gère les erreurs (par exemple, une page 404)
    echo "Erreur : action '$action' non trouvée.";
}

?>