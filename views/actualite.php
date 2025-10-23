<?php
// actualite.php
// Page "Actualités" pour un cabinet dentaire

$clinicName = "Cabinet Dentaire du Parc";

// Exemple d'articles d’actualité (à modifier/compléter)
$news = [
    [
        "title" => "Journée prévention : contrôle gratuit pour les enfants",
        "date"  => "15 septembre 2025",
        "summary" => "À l’occasion de la rentrée scolaire, nous proposons une journée spéciale pour sensibiliser les enfants à l’hygiène bucco-dentaire. Contrôle gratuit et conseils personnalisés.",
        "link" => "#"
    ],
    [
        "title" => "Nouveau service : blanchiment dentaire professionnel",
        "date"  => "10 août 2025",
        "summary" => "Le cabinet propose désormais un blanchiment dentaire réalisé en toute sécurité par votre chirurgien-dentiste, avec des résultats visibles dès la première séance.",
        "link" => "#"
    ],
    [
        "title" => "Congés annuels d’été",
        "date"  => "20 juillet 2025",
        "summary" => "Le cabinet sera fermé du 1er au 15 août inclus. Pour toute urgence, merci de contacter le service de garde de Lyon.",
        "link" => "#"
    ],
];
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Actualités — <?= htmlspecialchars($clinicName) ?></title>
  <meta name="description" content="Actualités, événements et annonces du <?= htmlspecialchars($clinicName) ?>.">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/actualite.css">
  
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
              <li><a  href="../index.php?action=login">Connexion</a></li>
             <!-- <li><a  name="action" href="../index1.php">Connexion</a></li-->              

            </ul>
          </div> 
        
    </nav><br><br><br><br><br><br>
  <header>
    <div class="container">
      <h1>Actualités du <?= htmlspecialchars($clinicName) ?></h1>
      <p>Retrouvez ici les dernières informations, événements et annonces du cabinet.</p>
    </div>
  </header>

  <main class="container" role="main" aria-labelledby="actus">
    <section id="actus">
      <?php if (count($news) > 0): ?>
        <?php foreach ($news as $item): ?>
        <article class="card" aria-labelledby="<?= strtolower(str_replace(' ', '-', $item['title'])) ?>">
            <h2><?= htmlspecialchars($item['title']) ?></h2>
            <div class="date"><?= htmlspecialchars($item['date']) ?></div>
            <p><?= htmlspecialchars($item['summary']) ?></p>
            <?php if (!empty($item['link'])): ?>
              <p><a href="<?= htmlspecialchars($item['link']) ?>">En savoir plus →</a></p>
            <?php endif; ?>
          </article>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Aucune actualité disponible pour le moment. Revenez bientôt !</p>
      <?php endif; ?>
    </section>
  </main>

  <footer>
    <div class="container">
      &copy; <?= date("Y") ?> <?= htmlspecialchars($clinicName) ?> — Tous droits réservés.
    </div>
  </footer>
</body>
</html>
