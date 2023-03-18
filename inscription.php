<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php require "php/head.php" ?>
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
    <div id="container">
        <!-- zone de connexion -->
        <form method="POST">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" required>
            <br>
            <label for="email">Adresse e-mail :</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>
            <br>
            <label for="first_name">Prénom :</label>
            <input type="text" name="first_name" required>
            <br>
            <label for="last_name">Nom de famille :</label>
            <input type="text" name="last_name" required>
            <br>
            <label for="phone_number">Numéro de téléphone :</label>
            <input type="tel" name="phone_number" required>
            <br>
            <label for="birthdate">Date de naissance :</label>
            <input type="date" name="birthdate" required>
            <br>
            <label for="gender">Genre :</label>
            <select name="gender" required>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
                <option value="Other">Autre</option>
            </select>
            <br>
            <input type="submit" value="S'inscrire">
            <button onclick='window.location.href="login_patients.php"'>Retour</button>
        </form>
    </div>
<footer>
    <?php include'php/footer.php' ?>
</footer>
</body>
</html>