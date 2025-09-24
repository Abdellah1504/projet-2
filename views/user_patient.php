<?php
 if (session_status() === PHP_SESSION_NONE) {
           session_start();
 }  
// Si  l’utilisateur est bien connecté et que son statut est patient
if (!isset($_SESSION['user']) || $_SESSION['user']['statut'] !== 'patient') {
    //  Si ce n’est pas le cas → redirection vers /index_user.php.
    //header("Location: /index_user.php");
    header("Location: index.php");
    exit;
}
?>

<h1>Bienvenue, Patient</h1>
<p>Voir vos rendez-vous, informations, etc.</p>
