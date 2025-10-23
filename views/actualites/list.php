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
              <li><a href="<?= BASE_URL ?>index.php?action=acceuil">Accueil</a></li>
              <li><a href="<?= BASE_URL ?>index.php?action=a_propos">À propos</a></li>    
              <li><a href="<?= BASE_URL ?>index.php?action=listerservice">Services</a></li>              
              <li><a href="<?= BASE_URL ?>index.php?action=listeractualite">Actualités</a></li>
              <li><a  href="<?= BASE_URL ?>index.php?action=loginactualite">Connexion</a></li>           

            </ul>
          </div> 
        
    </nav><br><br><br><br><br><br>

<h2>Liste des actualités</h2>

 
<br><br>

<table border="1" cellpadding="8">
  <tr>
    <th>Titre</th>
    <th>Contenu</th>
    <th>Date de publication</th>
     
     
  
  </tr>


  <?php foreach ($actu as $a): ?>
  <tr>
    <td><?= htmlspecialchars($a['titre']) ?></td>
    <td><?= nl2br(htmlspecialchars(substr($a['contenu'], 0, 100))) ?>...</td>
    <td><?= htmlspecialchars($a['date_publication']) ?></td>
     
       
  </tr>
  <?php endforeach; ?>
</table>
