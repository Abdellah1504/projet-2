<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- pour le responsive design : permet à la page de s’adapter aux écrans mobiles.--> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste rendez-vous</title> 
    
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
              <li><a href="<?= BASE_URL ?>index.php?action=acceuil">Accueil</a></li>
              <li><a href="<?= BASE_URL ?>index.php?action=a_propos">À propos</a></li>    
              <li><a href="<?= BASE_URL ?>index.php?action=listerservice">Services</a></li>              
              <li><a href="<?= BASE_URL ?>index.php?action=listeractualite">Actualités</a></li>
              <li><a  href="<?= BASE_URL ?>index.php?action=loginservice">Connexion</a></li>
             <!-- <li><a  name="action" href="../index1.php">Connexion</a></li-->              

            </ul>
          </div> 
        
    </nav> 
<!-- Bloc PHP : affiche une erreur en rouge si une erreur existe-->
<?php if (!empty($error)): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

 
  <h1>Connexion : </h1> <br>   
  <!--Formulaire de connexion :
      Méthode POST : envoie les données de façon sécurisée.
      Action : envoie les données à index.php avec un paramètre action=login.-->
    <?php if (!empty($incorrect)): ?>
        <p style="color:red;font-size: 50px;"><?=  $incorrect ?></p>
    <?php endif; ?>

      <form class="login" method="post" action="index.php?action=loginservice">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <br><button type="submit" class ="btn_connexion" >Connexion</button>
</form><br><br><br><br> 

 </body>
<footer>
        <p>&copy; <?php echo date("Y"); ?> Cabinet. Tous droits réservés.</p>
    </footer>
</html>
