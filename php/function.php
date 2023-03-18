<?php

function connect_db() {
    if(isset($_POST['username']) && isset($_POST['password']))
    {
// Informations d'identification de la base de données


// Connexion à la base de données
        $conn = mysqli_connect($host, $user, $password, $db_name, $db_port, $db_socket);

// Vérification de la connexion
        if (!$conn) {
            die("Connexion échouée : " . mysqli_connect_error());
            return $conn;
        }
        echo "Connexion réussie";

    }}
?>