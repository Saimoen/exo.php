<!-- Exercice 4
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
index.php?language=PHP&server=LAMP
 -->

<!DOCTYPE html>
<html>

<head>
    <title>Page d'index</title>
</head>

<body>
    <?php
    if (isset($_GET['language']) && isset($_GET['server'])) {
        $language = $_GET['language'];
        $server = $_GET['server'];

        echo "Language : $language <br>";
        echo "Server : $server";
    } else {
        echo "Les paramètres 'language' et 'server' sont manquants dans l'URL.";
    }
    ?>
</body>

</html>