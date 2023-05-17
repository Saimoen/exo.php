<!-- Exercice 3
Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français. -->

<?php
$dateCourante = new DateTime();
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'Europe/Paris');

$dateFormatee = $formatter->format($dateCourante);
echo $dateFormatee;
?>