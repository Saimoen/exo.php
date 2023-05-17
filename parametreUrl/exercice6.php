<!-- Exercice 6
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
index.php?building=12&room=101 -->

<!DOCTYPE html>
<html>

<head>
    <title>Page d'index</title>
</head>

<body>
    <?php
    if (isset($_GET['building']) && isset($_GET['room'])) {
        $building = $_GET['building'];
        $room = $_GET['room'];

        echo "Immeuble : $building <br>";
        echo "Chambre : $room";
    } else {
        echo "Les paramètres 'building' et 'room' sont manquants dans l'URL.";
    }
    ?>
</body>

</html>