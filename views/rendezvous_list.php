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

<h2>Liste des rendez-vous</h2>
<table border="1" class="border">
    <tr>
       <!-- Affiche un tableau HTML avec les colonnes : ID, Patient, Date, Heure, Motif.-->
        <th>ID</th><th>Patient</th><th>Date</th><th>Heure</th><th>Motif</th> 
        <!--Si l'utilisateur est admin, une colonne "Actions" est ajoutée (Modifier / Supprimer).-->
       <?php if ($_SESSION["user"]["role"] === "admin"): ?>
             <th>Actions</th>
       <?php endif; ?>
    </tr>
    <!--Boucle sur les rendez-vous pour les afficher ligne par ligne.-->
    <?php foreach ($rvs as $rv): ?>
        <tr>
            <!--Affichage d'une ligne de tableau HTML :
                - `$rvs` est un tableau contenant plusieurs rendez-vous.
                - Chaque élément (chaque rendez-vous) est stocké dans la variable `$rv`.-->
            <td><?= $rv["id"] ?></td>
              <!--encodé avec htmlspecialchars() pour éviter les failles XSS.-->
            <td><?= htmlspecialchars($rv["patient"]) ?></td>
            <td><?= $rv["date"] ?></td>
            <td><?= $rv["heure"] ?></td>
            <td><?= htmlspecialchars($rv["motif"]) ?></td>
             <!--si l’utilisateur connecté est un administrateur-->
            <?php if ($_SESSION["user"]["role"] === "admin"): ?>
            <td>
                <!-- accées  deux liens :               
                    Modifier le rendez-vous.
                    Supprimer le rendez-vous (avec une confirmation JavaScript).-->
                <a href="index.php?action=modifier&id=<?= $rv["id"] ?>">Modifier</a>
                <a href="index.php?action=supprimer&id=<?= $rv["id"] ?>"
                       onclick="return confirm('Supprimer ce rendez-vous ?');">Supprimer</a>
            </td>
            <?php endif; ?>        

        </tr>
    <?php endforeach; ?>
    
</table>
        <!--Si un utilisateur est connecté ($_SESSION["user"] existe), affiche un bouton pour se déconnecter.-->
            <?php if (isset($_SESSION["user"])): ?>
                
                     
                    <a href="index.php?action=logout" class = "btn_deconnexion"  onclick="return confirm('Voulez-vous vraiment vous déconnecter ?');">Déconnexion</a>
               
            <?php endif; ?>

           
                
</body>
</html>

