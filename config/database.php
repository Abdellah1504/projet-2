<?php
class Database {
     //stocker l’hôte, la base, l’utilisateur et le mot de passe en privé
    private $host = "localhost";
    private $db_name = "cabinet_dentaire"; 
    private $username = "root";
    private $password = "";
    public $conn;

    //public function connect() {
     public function getConnection() {
        //initialiser $conn à null avant d’essayer de se connecter.
        $this->conn = null;
        try {
           
            //Connexion PDO :
            //la chaîne de connexion DSN : "mysql:host=localhost;dbname=CabinetMedical"
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                 $this->username, $this->password);
            //Encodage UTF-8 : pour éviter les problèmes d’accents et de caractères spéciaux.
            $this->conn->exec("set names utf8");
    
    //Si la connexion échoue, une exception PDOException est lancée → on l’attrape et on affiche l’erreur.
        } catch(PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
        //La fonction retourne l’objet PDO, ce qui permet de l’utiliser dans d’autres classes
        return $this->conn;
    }
}
