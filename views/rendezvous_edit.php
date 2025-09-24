<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Cabinet</title>
    <link rel="stylesheet" href="views/Contenu/rdv.css">
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
              <li><a href="#contact">Contactez-nous</a></li>
              <li><a href="index.php">Connexion</a></li>              

            </ul>
          </div> 
        
    </nav>
<main>

        <h2>Modifier le rendez-vous</h2>

<form method="post" action="index.php?action=modifier">
    <input type="hidden" name="id" value="<?= $rv['id'] ?>">

    <label>Patient :</label>
    <input type="text" name="patient" value="<?= htmlspecialchars($rv['patient']) ?>" required><br>

    <label>Date :   </label>
    <input type="date" name="date" value="<?= $rv['date'] ?>" required><br>

    <label>Heure :</label>
    <input type="time" name="heure" value="<?= $rv['heure'] ?>" required><br>

    <label>Motif :</label>
    <input type="text" name="motif" value="<?= htmlspecialchars($rv['motif']) ?>" required><br>

    <button  class = "bouton-enreg"  type="submit">Enregistrer</button>
</form>

</main>
 <footer>
        <br><br><p>&copy; <?php echo date("Y"); ?> Cabinet. Tous droits réservés.</p>
    </footer>
</body>
</html>