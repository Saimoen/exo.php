<!-- Exercice 2
Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page. -->
<!DOCTYPE html>
<html>

<head>
    <title>Deuxième page</title>
</head>

<body>
    <h1>Deuxième page</h1>
    <?php
    // Vérifiez si les variables sont présentes dans l'URL
    if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])) {
        // Récupérez les valeurs transmises via l'URL
        $lastname = $_GET['lastname'];
        $firstname = $_GET['firstname'];
        $age = $_GET['age'];

        // Affichez les valeurs
        echo "<p>Nom: " . $lastname . "</p>";
        echo "<p>Prénom: " . $firstname . "</p>";
        echo "<p>Âge: " . $age . "</p>";
    } else {
        echo "<p>Les variables n'ont pas été transmises correctement.</p>";
    }
    ?>
</body>

</html>