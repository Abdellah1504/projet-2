<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- permet d’utiliser des caractères spéciaux (accents, etc.)-->
    <meta charset="UTF-8"> 
    <!--page responsive (s’adapte à la taille des écrans, utile sur mobile).-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Cabinet</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/login_form_css.css">
     <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    
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
                <!--Liste de liens : Accueil, À propos, Services, Actualités, Contact, Connexion.-->
              <li><a href="<?= BASE_URL ?>index.php?action=acceuil">Accueil</a></li>
              <li><a href="<?= BASE_URL ?>index.php?action=a_propos">À propos</a></li>    
              <li><a href="<?= BASE_URL ?>index.php?action=listerservice">Services</a></li>              
              <li><a href="<?= BASE_URL ?>index.php?action=listeractualite">Actualités</a></li>
              <li><a  href="<?= BASE_URL ?>index.php?action=login">Connexion</a></li>
                          

            </ul>
          </div> 
        
    </nav>


<h2>Ajouter un service</h2>

<?php if (!empty($confirmé)): ?>
        <p style="color:green;font-size: 50px;"><?=  $confirmé ?></p>
 <?php endif; ?>
<a style="color:blue;font-size: 20px; margin: 10px 900px 10px 10px;    ; " href="index.php?action=listerserviceadmin">⬅️ Retour à la liste</a>
<form method="post"  action="index.php?action=ajoutservice">
  <label>Nom :</label><br>
  <input type="text" name="nom" rows="8" cols="20"  required><br><br>
  <label>Description :</label><br>
  <textarea name="description" rows="8" cols="80" required></textarea><br><br>
  <button  class = "bouton-enregistrer" type="submit">Enregistrer</button>
</form>

</body> <br><br>

</html>

