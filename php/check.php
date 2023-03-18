<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
// Informations d'identification de la base de données
    $host = "127.0.0.1";
    $user = "root";
    $password = "root";
    $db_name = "roncadaanthonyozcanozan";
    $db_port = 8889;
    $db_socket = "/Applications/MAMP/tmp/mysql/mysql.sock";

// Connexion à la base de données
    $conn = mysqli_connect($host, $user, $password, $db_name, $db_port, $db_socket);

// Vérification de la connexion
    if (!$conn) {
        die("Connexion échouée : " . mysqli_connect_error());
    }
    echo "Connexion réussie";

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM users where 
 username = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($conn,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['username'] = $username;
            header('Location: ../admin.php');
        }
        else
        {
            header('Location: ../login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
        header('Location: ../login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
    header('Location: login.php');
}
mysqli_close($conn); // fermer la connexion
?>
