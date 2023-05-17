<!-- Exercice 6
Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page. -->


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    echo "Civilité : $civilite <br>";
    echo "Nom : $nom <br>";
    echo "Prénom : $prenom";
} elseif (isset($_GET['civilite']) && isset($_GET['nom']) && isset($_GET['prenom'])) {
    $civilite = $_GET['civilite'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];

    echo "Civilité : $civilite <br>";
    echo "Nom : $nom <br>";
    echo "Prénom : $prenom";
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 6</title>
    </head>

    <body>
        <form action="exercice6.php" method="POST">
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
            <button type="submit">Submit</button>
        </form>
    </body>

    </html>

<?php
}
?>