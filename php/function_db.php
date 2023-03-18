<?php
// Data db
$host = "127.0.0.1";
$user = "root";
$password = "root";
$database = "roncadaanthonyozcanozan";
$db_port = 8889;
$db_socket = "/Applications/MAMP/tmp/mysql/mysql.sock";

function connectToDatabase($host, $user, $password, $database, $db_port, $db_socket) {
    // Connexion à la base de données
    $conn = new mysqli($host, $user, $password, $database, $db_port, $db_socket);

    // Vérifier si la connexion a échoué
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Vérifier si la base de données existe
    if (!$conn->select_db($database)) {
        // Créer la base de données si elle n'existe pas
        $sql = "CREATE DATABASE $database";
        if ($conn->query($sql) === TRUE) {
            echo "La base de données $database a été créée avec succès.";
        } else {
            die("Erreur lors de la création de la base de données : " . $conn->error);
        }
    }

    // Retourner la connexion à la base de données
    return $conn;
}

/*
CREATE TABLE patients (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    birthdate DATE NOT NULL,
    gender ENUM('M', 'F', 'Other') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) UNIQUE NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);*/


