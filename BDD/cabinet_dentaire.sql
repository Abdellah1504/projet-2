-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost

-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cabinet_dentaire`
--

-- --------------------------------------------------------




CREATE DATABASE cabinet_dentaire CHARACTER SET utf8mb4;

USE cabinet_dentaire;

-- Table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);


--
-- Structure de la table `rendez_vous`
--
 
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




CREATE TABLE services (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100),
  description TEXT
);

CREATE TABLE actualites (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(255),
  contenu TEXT,
  date_publication DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE horaires (
  id INT AUTO_INCREMENT PRIMARY KEY,
  jour VARCHAR(20),
  ouverture TIME,
  fermeture TIME
);

NSERT INTO horaires (jour, ouverture, fermeture) VALUES
('Lundi', '08:30', '17:30'),
('Mardi', '08:30', '17:30'),
('Mercredi', '08:30', '17:30'),
('Jeudi', '08:30', '17:30'),
('Vendredi', '08:30', '17:30'),
('Samedi', '09:00', '13:00'),
('Dimanche', NULL, NULL);