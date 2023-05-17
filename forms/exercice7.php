<!-- Exercice 7
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $fichier = $_FILES['fichier'];

    echo "Civilité : $civilite <br>";
    echo "Nom : $nom <br>";
    echo "Prénom : $prenom <br>";
    echo "Nom du fichier : " . $fichier['name'] . "<br>";
    echo "Extension du fichier : " . pathinfo($fichier['name'], PATHINFO_EXTENSION);
} elseif (isset($_GET['civilite']) && isset($_GET['nom']) && isset($_GET['prenom'])) {
    $civilite = $_GET['civilite'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $fichier = $_FILES['fichier'];

    echo "Civilité : $civilite <br>";
    echo "Nom : $nom <br>";
    echo "Prénom : $prenom <br>";
    echo "Nom du fichier : " . $fichier['name'] . "<br>";
    echo "Extension du fichier : " . pathinfo($fichier['name'], PATHINFO_EXTENSION);
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 7</title>
    </head>

    <body>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label for="civilite">Civilité:</label>
            <select name="civilite" id="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <br>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required>
            <br>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom" required>
            <br>
            <label for="fichier">Fichier:</label>
            <input type="file" name="fichier" id="fichier" required>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>

    </html>

<?php
}
?>