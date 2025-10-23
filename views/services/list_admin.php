
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
<h2>Liste des services</h2>
 
<br><br>

<table border="1" cellpadding="8">
  <tr>
    <th>Nom</th>
    <th>Description</th>
    <?php if ($_SESSION["user"]["role"] === "admin"): ?>
        <th>Actions</th>
    <?php endif; ?>
  </tr>
  <?php foreach ($srv  as $s): ?>
  <tr>
    <td><?= htmlspecialchars($s['nom']) ?></td>
    <td><?= htmlspecialchars($s['description']) ?></td>
    <?php if ($_SESSION["user"]["role"] === "admin"): ?>
      <td> 
         <a href="index.php?action=ajoutservice">➕ Ajouter un service</a>       
       <a href="index.php?action=modifservice&id=<?= $s["id"] ?>">✏️ Modifier</a> |
        <a href="index.php?action=suprimaservice&id=<?= $s["id"] ?>"
           onclick="return confirm('Supprimer ce service ?')">🗑️ Supprimer</a>
      </td>
    <?php endif; ?>
  </tr>
  <?php endforeach; ?>
</table>

</body>
<footer>
        <p>&copy; <?php echo date("Y"); ?> Cabinet. Tous droits réservés.</p>
    </footer>
</html>
