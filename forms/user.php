<?php
/* Exercice 3
Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.  */
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];

    echo "Nom : $nom <br>";
    echo "Prénom : $prenom";
} else {
    echo "Les paramètres 'nom' et 'prenom' sont manquants dans l'URL.";
}

/* Exercice 4
Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises. */
if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    header("Location: user.php?nom=$nom&prenom=$prenom");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>User</h1>
</body>

</html>