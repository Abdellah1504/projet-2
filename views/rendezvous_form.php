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
                       

            </ul>
          </div> 
        
    </nav> <br><br><br>
   <h1>Prendre rendez-vous</h1><br>
<form class="rdv" method="post" action="index.php?action=ajouter">  
    <input type="text" name="patient" placeholder="Nom du patient" required>
    <input type="date" name="date" required>
    <input type="time" name="heure" required>
    <input type="text" name="motif" placeholder="Motif" required><br> <br>
    <button   class = "btn_rdv"  type="submit">Prendre rendez-vous</button>
</form>
 
    
</body><br><br><br><br><br>
<footer>
        <br><br><p>&copy; <?php echo date("Y"); ?> Cabinet. Tous droits réservés.</p>
    </footer>
</html>
