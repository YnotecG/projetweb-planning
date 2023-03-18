<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php require "php/head.php" ?>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Mon Dashboard</h1>
        </div>
        <div class="sidebar">
            <ul>
                <li><a href="#">Planning</a></li>
                <li><a href="#">Statistiques</a></li>
                <li><a href="#">Coordonnées</a></li>
                <li><a href="#">Patients</a></li>
                <a href='login.php?deconnexion=true'><span>Déconnexion</span></a>

                <!-- tester si l'utilisateur est connecté -->
                <?php
                session_start();
                if(isset($_GET['deconnexion']))
                {
                    if($_GET['deconnexion']==true)
                    {
                        session_unset();
                        header("location:login.php");
                    }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br><br>Bonjour $user,<br>Vous êtes connectés";
                }
                ?>
            </ul>
        </div>
        <div class="content">
            <h2>Statistiques</h2>
            <p>Quelques statistiques :</p>
            <ul>
                <li>Nombre de rendez-vous : </li>
                <li>Nombre de patients : </li>
            </ul>
        </div>
    </div>
    <footer>
        <?php include'php/footer.php' ?>
    </footer>
</body>
</html>