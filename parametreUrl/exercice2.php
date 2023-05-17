<!-- Exercice 2
Faire une page index.php. Tester sur cette page 
que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : 
index.php?lastname=Nemare&firstname=Jean -->

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
        $age = $_GET['age'];

        if (isset($age)) {
            echo "Age : $age <br>";
        } else {
            echo "Le paramètre 'age' est manquant dans l'URL. <br>";
        }
        echo "Nom : $lastname <br>";
        echo "Prénom : $firstname";
    } else {
        echo "Les paramètres 'lastname' et 'firstname' sont manquants dans l'URL.";
    }
    ?>
</body>

</html>