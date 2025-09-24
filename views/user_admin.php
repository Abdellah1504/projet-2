<?php
//démarre ou reprend la session existante.
 if (session_status() === PHP_SESSION_NONE) {
           session_start();
 }  
// Si  l’utilisateur est bien connecté et que son statut est admin
if (!isset($_SESSION['user']) || $_SESSION['user']['statut'] !== 'admin') {
  //  Si ce n’est pas le cas → redirection vers /index_user.php.
    //header("Location: /index_user.php")   
    header("Location: index.php");

    //exit; est important pour s’assurer que le script s’arrête après la redirection (sinon le reste du code s’exécuterait).
    exit;
}
?>


<h1>Bienvenue, Administrateur</h1>
<p>Gestion des patients, rendez-vous, etc.</p>
