<!-- Exercice 1
Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean -->

<!DOCTYPE html>
<html>

<head>
    <title>Page d'index</title>
</head>

<body>
    <?php
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
        $lastname = $_GET['lastname'];
        $firstname = $_GET['firstname'];

        echo "Nom : $lastname <br>";
        echo "Prénom : $firstname";
    } else {
        echo "Les paramètres 'lastname' et 'firstname' sont manquants dans l'URL.";
    }
    ?>
</body>

</html>