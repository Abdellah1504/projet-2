CREATE DATABASE cabinet_dentaire CHARACTER SET utf8mb4;

USE cabinet_dentaire;

-- Table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Table des rendez-vous
CREATE TABLE rendezvous (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient VARCHAR(100) NOT NULL,
    date_rdv DATETIME NOT NULL
);

-- Exemple d’utilisateur : admin (mot de passe : 1234)
INSERT INTO users (email, password) VALUES (
    'admin@cabinet.fr',
    SHA2('1234', 256)
);
