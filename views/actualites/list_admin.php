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
             <!-- <li><a  name="action" href="../index1.php">Connexion</a></li-->              

            </ul>
          </div> 
        
    </nav>

<h2>Liste des actualités</h2>
 
<br><br>

<table border="1" cellpadding="8">
  <tr>
    <th>Titre</th>
    <th>Contenu</th>
    <th>Date de publication</th>
    <?php if ($_SESSION["user"]["role"] === "admin"): ?>
      <th>Actions</th>
    <?php endif; ?>
  </tr>


  <?php foreach ($actu as $a): ?>
  <tr>
    <td><?= htmlspecialchars($a['titre']) ?></td>
    <td><?= nl2br(htmlspecialchars(substr($a['contenu'], 0, 100))) ?>...</td>
    <td><?= htmlspecialchars($a['date_publication']) ?></td>
    <?php if ($_SESSION["user"]["role"] === "admin"): ?>      <td>
      
        <a href="index.php?action=ajoutactualite">➕ Ajouter une actualité</a>   
        <a href="index.php?action=modifactualite&id=<?= $a["id"] ?>">✏️ Modifier</a> 
        <a href="index.php?action=suprimactualite&id=<?= $a['id'] ?>" onclick="return confirm('Supprimer cette actualité ?')">🗑️ Supprimer</a>
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
