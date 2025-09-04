<?php

// Contrôleur principal
class Controller {

    // Nom du modèle par défaut
    protected $modelName = 'Home';

    // Nom de la vue par défaut
    protected $viewName = 'home';

    // Méthode pour charger le modèle
    public function loadModel($modelName) {
        require_once 'models/' . $modelName . '.php';
        return new $modelName();
    }

    // Méthode pour charger la vue
    public function loadView($viewName, $data = []) {
        // Vérifie si le fichier de vue existe
        if (file_exists('views/' . $viewName . '.php')) {
            // Inclut le fichier de vue
            require_once 'views/' . $viewName . '.php';
        } else {
            // Affiche une erreur si la vue n'existe pas
            echo "Erreur : la vue '$viewName' n'existe pas.";
        }
    }

    // Action par défaut (peut être surchargée dans les contrôleurs enfants)
    public function index() {
        // Charge le modèle par défaut
        $model = $this->loadModel($this->modelName);

        // Récupère les données du modèle (si nécessaire)
        $data = $model->getData();

        // Charge la vue par défaut et passe les données
        $this->loadView($this->viewName, $data);
    }
}


?>




