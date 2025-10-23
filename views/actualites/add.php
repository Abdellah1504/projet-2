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

<h2>Ajouter une actualité</h2>
<?php if (!empty($confirmé)): ?>
        <p style="color:green;font-size: 50px;"><?=  $confirmé ?></p>
    <?php endif; ?>
<p style="color:blue;font-size: 20px; margin: 10px 900px 10px 10px;"></p>
<form method="post"  action="index.php?action=ajoutactualite">  
  <label>Titre :</label> 
  <input   type="text" name="titre" required> 

  <label>Contenu :</label> 
  <textarea name="contenu" rows="8" cols="80" required></textarea> 

  <label>Date de publication :</label> 
     
<input type="date" name="date_publication" required> 
  <button  class = "bouton-publier" type="submit">Publier</button>
  <br><br>
</form>

</body>

</html>

 

