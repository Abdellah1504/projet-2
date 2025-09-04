<?php
require_once "models/User.php";

class UserController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = new User();
            $result = $user->login($username, $password);

            if ($result) {
                session_start();
                $_SESSION['user'] = $result['username'];
                header("Location: index.php?action=dashboard");
                exit;
            } else {
                $error = "Identifiants incorrects.";
                include "views/login.php";
            }
        } else {
            include "views/login.php";
        }
    }

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?action=login");
            exit;
        }
        include "views/dashboard.php";
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php?action=login");
    }
}
