<!-- Exercice 2
Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page. -->

<!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil</title>
</head>

<body>
    <h1>Page d'accueil</h1>
    <?php
    $lastname = "Doe";
    $firstname = "John";
    $age = 25;
    ?>

    <a href="second_page.php?lastname=<?php echo $lastname; ?>&firstname=<?php echo $firstname; ?>&age=<?php echo $age; ?>">Aller à la deuxième page</a>
</body>

</html>