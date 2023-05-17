<!-- Exercice 4
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches. -->

<!DOCTYPE html>
<html>

<head>
    <title>Informations du cookie</title>
</head>

<body>
    <h1>Informations du cookie</h1>

    <?php
    // Vérifie si le cookie existe
    if (isset($_COOKIE['login'])) {
        $login = $_COOKIE['login'];

        echo "<p>Login: " . $login . "</p>";
    } else {
        echo "<p>Le cookie n'existe pas.</p>";
    }
    ?>
</body>

</html>