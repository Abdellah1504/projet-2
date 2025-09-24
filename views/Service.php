<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services du Cabinet Médical</title>
    <link rel="stylesheet" href="Contenu\service.css">
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
              <li><a href="Acceuil.php">Accueil</a></li>
              <li><a href="a_propos.php">À propos</a></li>
              <li><a href="Service.php">Services</a></li>              
              <li><a href="actualite.php">Actualités</a></li>
              <li><a href="#contact">Contactez-nous</a></li>
              <li><a  href="../index.php?action=login">Connexion</a></li>
             <!-- <li><a  name="action" href="../index1.php">Connexion</a></li-->              

            </ul>
          </div> 
        
    </nav><br><br><br><br><br>
    <header>
        <h1>Nos Services</h1>
    </header>
    <main>
        <?php
        // Informations des services (à remplacer par des données dynamiques si nécessaire)
        $services = array(
            array("name" => "Consultations et bilans", "description" => "Examens de routine, diagnostic des caries, contrôle de l’état des dents et des gencives."),
            array("name" => "Prévention", "description" => "Détartrage, conseils d’hygiène bucco-dentaire, fluorations, scellement des sillons."),
            array("name" => "Soins dentaires", "description" => "Traitement des caries (plombages, composites), soins des gencives, traitement des infections."),
            array("name" => "Urgences dentaires", "description" => "Prise en charge des douleurs, fractures dentaires, infections."),
            array("name" => "Orthodontie", "description" => "Correction de l’alignement des dents avec appareils fixes ou amovibles."),
            array("name" => "Implantologie", "description" => "Remplacement de dents manquantes par des implants.")
        );

        foreach ($services as $service) {
            echo '<div class="service">';
            echo '<h2>' . htmlspecialchars($service['name']) . '</h2>';
            echo '<p>' . htmlspecialchars($service['description']) . '</p>';
            echo '</div>';
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 Cabinet Médical</p>
    </footer>
</body>
</html>