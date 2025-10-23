<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Admin - Modifier les horaires</title>
 <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style_horaire.css">
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
  <h1>Administration - Modifier les horaires</h1>

  <?php if (isset($_GET['success'])): ?>
    <p style="color: green;">Horaires mis à jour avec succès !</p>
  <?php endif; ?>

  <form class="horaire" method="post">
    <table>
      <tr><th>Jour</th><th>Ouverture</th><th>Fermeture</th></tr>
      <?php foreach ($horaires as $h): ?>
        <tr>
          <td><?= htmlspecialchars($h['jour']) ?></td>
          <td><input type="time" name="ouverture[<?= $h['id'] ?>]" value="<?= $h['ouverture'] ?>"></td>
          <td><input type="time" name="fermeture[<?= $h['id'] ?>]" value="<?= $h['fermeture'] ?>"></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <button class="btn_enreg" type="submit">Enregistrer</button>
  </form>

  <p><a href="views/Acceuil.php">Retour à l'accueil</a></p>
</body>
</html>
