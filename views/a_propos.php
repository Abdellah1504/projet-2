<?php
// propos.php
// Page "À propos" pour un cabinet dentaire
// Personnalisez les variables ci-dessous

$clinicName   = "Cabinet Dentaire du Dr Dupont";
$dentistName  = "Dr. Dupont, Chirurgien-Dentiste";
$address      = "12 Rue xxxxxx, 69000 Lyon, France";
$phone        = "+33 6 00 00 00 00";
$email        = "contact@cabinetdentaire-lyon.fr";
$openingHours = [
    "Lundi" => "09:00 - 18:00",
    "Mardi" => "09:00 - 18:00",
    "Mercredi" => "09:00 - 13:00",
    "Jeudi" => "09:00 - 18:00",
    "Vendredi" => "09:00 - 17:00",
    "Samedi" => "Sur rendez-vous",
    "Dimanche" => "Fermé",
];
$mission = "Offrir des soins dentaires professionnels, humains et respectueux, \
en privilégiant la prévention, la pédagogie et le confort du patient.";
$values = [
    "Écoute et respect" => "Chaque patient est accueilli avec attention ; nous expliquons chaque étape du soin.",
    "Précision et sécurité" => "Protocoles rigoureux et matériels entretenus pour garantir des traitements sûrs.",
    "Prévention" => "Conseils personnalisés d'hygiène pour préserver votre santé bucco-dentaire à long terme.",
];

$team = [
    [
        "name" => "Dr. Dupont",
        "role" => "Chirurgien-Dentiste",
        "bio"  => "Spécialisée en odontologie conservatrice et prothèses, formée aux techniques modernes d'anesthésie locale."
    ],
    [
        "name" => "Mme. Dupont",
        "role" => "Assistante dentaire",
        "bio"  => "Responsable du suivi des patients et de la stérilisation du matériel."
    ],
    [
        "name" => "M. Christelle.",
        "role" => "Secrétariat",
        "bio"  => "Accueil, prise de rendez-vous et gestion administrative."
    ],
];

$briefServices = [
    "Consultation et bilan"         => "Examen complet, radiographies numériques et plan de suivi personnalisé.",
    "Soins conservateurs"           => "Traitement des caries, obturations et soin des dents définitives.",
    "Chirurgie et extractions"      => "Extractions simples et actes chirurgicaux mineurs réalisés avec précaution.",
    "Prothèses et couronnes"        => "Couronnes, bridges et prothèses amovibles pour restituer la fonction et l'esthétique.",
    "Esthétique dentaire"           => "Blanchiment professionnel et restauration esthétique des dents.",
    "Urgences dentaires"           => "Douleurs, fractures ou infections : prise en charge rapide."
];

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>À propos — <?= htmlspecialchars($clinicName) ?></title>
  <meta name="description" content="À propos de <?= htmlspecialchars($clinicName) ?> — <?= htmlspecialchars($mission) ?>">
  <link rel="stylesheet" href="Contenu\apropos.css">
  
</head>
<body>
  <header>
    <div class="container">
      <div class="hero">
        <div>
          <h1><?= htmlspecialchars($clinicName) ?></h1>
          <p class="small"><?= htmlspecialchars($dentistName) ?> — <?= htmlspecialchars($address) ?></p>
        </div>
        <div class="small">
          <div>Tel. <strong><?= htmlspecialchars($phone) ?></strong></div>
          <div>Email : <a href="mailto:<?= htmlspecialchars($email) ?>" style="color:#fff;text-decoration:underline"><?= htmlspecialchars($email) ?></a></div>
        </div>
      </div>
    </div>
  </header>

  <main class="container" role="main" aria-labelledby="a-propos">
    <section id="a-propos" class="card" aria-label="À propos du cabinet">
      <h2>À propos</h2>
      <p><?= htmlspecialchars($clinicName) ?> est un cabinet dentaire situé à <?= htmlspecialchars($address) ?>. Notre objectif est simple : proposer des soins dentaires de qualité, dans un climat de confiance, en expliquant clairement chaque étape pour que vous vous sentiez en sécurité et bien informé(e). <?= htmlspecialchars($mission) ?></p>
      <p>Nous accordons une grande importance à la prévention et à l'accompagnement : avant chaque traitement, nous prenons le temps d'écouter vos attentes et vos craintes, puis nous proposons des solutions adaptées à votre situation personnelle.</p>
    </section>

    <section class="card" aria-labelledby="engagements" style="margin-top:16px;">
      <h2 id="engagements">Nos engagements</h2>
      <?php foreach ($values as $title => $desc): ?>
        <div style="margin-bottom:10px">
          <strong><?= htmlspecialchars($title) ?> :</strong>
          <span><?= htmlspecialchars($desc) ?></span>
        </div>
      <?php endforeach; ?>
      <p class="small" style="margin-top:8px">Nous respectons les règles d'hygiène et de stérilisation en vigueur et investissons régulièrement dans le matériel pour vous garantir confort et sécurité.</p>
    </section>

    <section class="card" aria-labelledby="services" style="margin-top:16px;">
      <h2 id="services">Nos principales prestations</h2>
      <div class="grid" style="margin-top:10px">
        <?php foreach ($briefServices as $title => $desc): ?>
          <article class="team-member" aria-labelledby="<?= strtolower(str_replace(' ', '-', $title)) ?>">
            <h3 id="<?= strtolower(str_replace(' ', '-', $title)) ?>" style="margin:0 0 8px 0;font-size:1.05rem"><?= htmlspecialchars($title) ?></h3>
            <p style="margin:0" class="small"><?= htmlspecialchars($desc) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="card" aria-la
