<!-- Exercice 2
Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST. -->

<?php
if (isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    header("Location: user.php?nom=$nom&prenom=$prenom");
    exit();
} else {
    echo "Les paramètres 'nom' et 'prenom' sont manquants dans l'URL.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <form action="user.php" method="POST">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <button type="submit">Submit</button>
    </form>
</body>

</html>