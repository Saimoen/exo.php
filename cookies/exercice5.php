<!-- Exercice 5
Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3. -->
<?php
// Vérifie si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère la nouvelle valeur du login
    $newLogin = $_POST["newLogin"];

    // Vérifie si le cookie existe
    if (isset($_COOKIE['login'])) {
        // Modifie le contenu du cookie en écrasant l'ancienne valeur
        setcookie("login", $newLogin, time() + 86400); // Cookie valide pendant 1 jour (86400 secondes)

        echo "<p>Le contenu du cookie a été modifié avec succès.</p>";
    } else {
        echo "<p>Le cookie n'existe pas.</p>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Modifier le contenu du cookie</title>
</head>

<body>
    <h1>Modifier le contenu du cookie</h1>

    <form action="" method="post">
        <label for="newLogin">Nouveau login:</label>
        <input type="text" id="newLogin" name="newLogin" required><br><br>

        <input type="submit" value="Modifier">
    </form>
</body>

</html>