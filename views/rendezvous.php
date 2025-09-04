
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Cabinet</title>
    <link rel="stylesheet" href="Contenu\style.css">
</head>
<body>

        <?php require_once(__DIR__ . '/header.php'); ?> <br> <br>
 <div class="center "> 
    <br><form action="traitement.php" method="post">
      <label for="nom">Nom :</label><br>
      <input type="text" id="nom" name="nom"><br><br>

      <label for="email">Email :</label><br>
      <input type="email" id="email" name="email"><br><br>

      <label for="date">Date du rendez-vous :</label><br>
      <input type="date" id="date" name="date"><br><br>

      <label for="heure">Heure du rendez-vous :</label><br>
      <input type="time" id="heure" name="heure"><br><br>

      <input type="submit" value="Prendre rendez-vous">
    </form>
  </div> 
   </body> 
</html> 