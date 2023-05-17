<!-- Exercice 3
Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher: 
index.php?startDate=2/05/2016&endDate=27/11/2016 -->

<!DOCTYPE html>
<html>

<head>
    <title>Page d'index</title>
</head>

<body>
    <?php
    if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
        $startdate = $_GET['startDate'];
        $enddate = $_GET['endDate'];

        echo "Start Date : $stardate <br>";
        echo "End Date : $enddate";
    } else {
        echo "Les paramètres 'startDate' et 'endDate' sont manquants dans l'URL.";
    }
    ?>
</body>

</html>