<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prise de rendez-vous</title>    
     
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/login_form_css.css">
     
    
    
    
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
              <li><a href="<?= BASE_URL ?>index.php?action=a_propos">À propos</a></li>         
                <li><a href="<?= BASE_URL ?>index.php?action=listerservice">Services</a></li>             
                <li><a href="<?= BASE_URL ?>index.php?action=listeractualite">Actualités</a></li>               
                <li><a href="<?= BASE_URL ?>index.php?action=listerhoraire">Horraire ouverture</a></li>
                <li><a  href="<?= BASE_URL ?>index.php?action=login">Connexion</a></li>
            </ul>
          </div> 
        
    </nav> <br><br><br>
  
<h1>Inscription</h2>

<?php if (!empty($error)): ?>
    <p style="color:red;font-size: 50px;"><?= $error ?></p>
<?php endif; ?>

<?php if (!empty($inscrit)): ?>
    <p style="color:green;font-size: 50px;"><?=  $inscrit ?></p>
<?php endif; ?>


<form method="post" action="index.php?action=register">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit" class ="btn_enregistrer" >Enregistrer</button>
</form> 
<br> <br><?php require_once(__DIR__ . '/footer.php'); ?> 