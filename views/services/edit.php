
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
      <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/rdv.css">
    
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
<main>



<h2>Modifier un service</h2>
<form method="post" action="<?= BASE_URL ?>index.php?action=modifservice">
  <input type="hidden" name="id" value="<?= $s['id'] ?>">
  <label>Nom :</label><br>
  <input type="text" name="nom" value="<?= htmlspecialchars($s['nom']) ?>" required><br><br>
  <label>Description :</label><br>
  <textarea name="description" rows="10" cols="70"     required><?= htmlspecialchars($s['description']) ?></textarea><br><br>
  <button type="submit">Mettre à jour</button>
</form>
