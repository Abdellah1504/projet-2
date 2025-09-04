<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupération des données du formulaire
  $nom = htmlspecialchars($_POST["nom_patient"]);
  $prenom = htmlspecialchars($_POST["prenom_patient"]);
  $email = htmlspecialchars($_POST["email"]);
  $date = htmlspecialchars($_POST["date_rendez_vous"]);
  $time = htmlspecialchars($_POST["time_rendez_vous"]);
  
  

  // Validation des données (exemple simple)
  if (empty($nom) || empty($prenom) || empty($email) || empty($date)|| empty($time)) {
    echo "Veuillez remplir tous les champs obligatoires.";
  } else {
    // Connexion à la base de données (à adapter)
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "nom_de_votre_base";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Préparation de la requête SQL (à adapter)
    $sql = "INSERT INTO rendez_vous (nom_patient,prenom_patient, email, date_rendez_vous , time_rendez_vous)
    VALUES ('$nom','$prenom' ,'$email', '$date' , '$time')";

    if ($conn->query($sql) === TRUE) {
      echo "Rendez-vous pris avec succès!";
    } else {
      echo "Erreur lors de la prise de rendez-vous: " . $conn->error;
    }

    $conn->close();
  }
}
?>