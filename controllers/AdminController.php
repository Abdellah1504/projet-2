<?php
require_once 'config/database.php';
require_once 'models/Horaire.php';

class AdminController {
    public function afficherAdmin() {
        $database = new Database();
        $db = $database->getConnection();
        $horaire = new Horaire($db);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($_POST['ouverture'] as $id => $ouv) {
                $fer = $_POST['fermeture'][$id];
                $horaire->update($id, $ouv, $fer);
            }
            header("Location: index.php?action=admin&success=1");
            exit;
        }

        $stmt = $horaire->readAll();
        $horaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include 'views/horaires/admin.php';
    }


    public function afficheredit() {
        $database = new Database();
        $db = $database->getConnection();
        $horaire = new Horaire($db);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($_POST['ouverture'] as $id => $ouv) {
                $fer = $_POST['fermeture'][$id];
                $horaire->update($id, $ouv, $fer);
            }
            include 'views/horaires/edit.php';
            exit;
        }

        $stmt = $horaire->readAll();
        $horaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include 'views/horaires/edit.php';
    }
}
