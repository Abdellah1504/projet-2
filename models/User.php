<?php
class User {
    private $conn;
    private $table = "users";

    public $id;
    public $email;
    public $password;
    public $role; // "admin" ou "patient"

    public function __construct($db) {
        $this->conn = $db;
    }

    // Vérification login
    //On appelle la méthode login() du modèle User en lui passant l’email et le mot de passe.
    public function login($email, $password) {
        //Le modèle fait une requête SQL pour vérifier si l’utilisateur existe.
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
      //Si l'utilisateur existe (rowCount() > 0),
        if ($stmt->rowCount() > 0) {
            //on récupère ses données.
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
          // On compare le mot de passe entré avec celui stocké dans la base (haché) grâce à password_verify().
            if (password_verify($password, $user["password"])) {
                return $user;
            }
        }
        //Si la vérification échoue,  retournes false.
        return false;
    }
   // ***************************************
public function register($email, $password) {
    // préparer une requête SQL qui cherche un utilisateur dans la table ($this->table) ayant un certain email.
    $check = $this->conn->prepare("SELECT id FROM " . $this->table . " WHERE email = :email");
    //associer la valeur de la variable $email au paramètre :email dans la requête.
    $check->bindParam(":email", $email);
    $check->execute();
    // utiliser fetch() pour récupérer le premier résultat trouvé.
    if ($check->fetch()) {
      //S’il y a un résultat, cela veut dire qu’un utilisateur avec cet email existe déjà.
      //On retourne donc false pour signaler que l’inscription ne doit pas continuer.
        return false; // email déjà pris
    }
    //Hachage sécurisé du mot de passe.
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO " . $this->table . " (email, password, role) 
              VALUES (:email, :password, 'patient')";

    //Préparation de la requête et liaison sécurisée des paramètres
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hash);
    return $stmt->execute();
}


 // ***************************************
}
