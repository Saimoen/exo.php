<!-- Exercice 5
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: index.php?week=12 -->

<!DOCTYPE html>
<html>

<head>
    <title>Page d'index</title>
</head>

<body>
    <?php
    if (isset($_GET['week'])) {
        $week = $_GET['week'];

        echo "Language : $week <br>";
    } else {
        echo "Le paramètre 'week' est manquant dans l'URL.";
    }
    ?>
</body>

</html>