<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prise de rendez-vous</title>    
     
    <link rel="stylesheet" href="views/Contenu/login_form_css.css">
     
    
    
    
</head>
<body>


     <nav class="navbar ">
          <div class="logo">Cabinet medical <br> <span>Dr. Dupont</span></div>
          <div class="burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu" id="menu">
            <ul>
              <li><a href="views/Acceuil.php">Accueil</a></li>
              <li><a href="views/a_propos.php">À propos</a></li>
              <li><a href="views/Service.php">Services</a></li>              
              <li><a href="views/actualite.php">Actualités</a></li>              
              <li><a  href="index.php?action=login">Connexion</a></li>
             <!-- <li><a  name="action" href="../index1.php">Connexion</a></li-->              

            </ul>
          </div> 
        
    </nav> <br><br><br>
  
<h1>Inscription</h2>

<?php if (!empty($error)): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<form method="post" action="index.php?action=register">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit" class ="btn_inscription" >S’inscrire</button>
</form> 
<br> <br><?php require_once(__DIR__ . '/footer.php'); ?> 