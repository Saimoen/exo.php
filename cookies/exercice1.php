<!-- Exercice 1
Faire une page HTML permettant de donner à l'utilisateur :

son User Agent
son adresse ip
le nom du serveur -->
<!DOCTYPE html>
<html>

<head>
    <title>Informations Utilisateur</title>
</head>

<body>
    <h1>Informations Utilisateur</h1>
    <p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p>Adresse IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    <p>Nom du serveur: <?php echo $_SERVER['SERVER_NAME']; ?></p>
</body>

</html>