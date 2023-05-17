<!-- Exercice 3
Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
A la validation du formulaire, stocker les informations dans un cookie. -->

<?php
// Vérifie si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs du formulaire
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Crée un cookie avec les informations de connexion
    setcookie("login", $login, time() + 86400); // Cookie valide pendant 1 jour (86400 secondes)

    // Redirige l'utilisateur vers une autre page
    header("Location: index.php");
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulaire de connexion</title>
</head>

<body>
    <h1>Formulaire de connexion</h1>

    <form action="/" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>

</html>