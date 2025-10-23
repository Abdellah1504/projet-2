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

    <h2>Modifier une actualité</h2>

<form method="post" action="<?= BASE_URL ?>index.php?action=modifactualite">
  <input type="hidden" name="id" value="<?= $a['id'] ?>">

  <label>Titre :</label><br>
  <input type="text" name="titre" value="<?= htmlspecialchars($a['titre']) ?>" required><br><br>

  <label>Contenu :</label><br>
  <textarea name="contenu" rows="10" cols="70" required><?= htmlspecialchars($a['contenu']) ?></textarea><br><br>

  <label>Date de publication :</label><br>
  <input type="date" name="date_publication" value="<?= htmlspecialchars($a['date_publication']) ?>" required><br><br>

 <button  class = "bouton-enreg"  type="submit">Enregistrer</button>
</form>


<br>
<!--<a href="index.php?controller=actualite&action=index">⬅️ Retour à la liste</a> --> 
</main>

<footer>
        <br><br><p>&copy; <?php echo date("Y"); ?> Cabinet. Tous droits réservés.</p>
</footer>
</body>
</html>