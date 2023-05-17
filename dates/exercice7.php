<!-- Exercice 7
Afficher la date du jour + 20 jours. -->

<?php
$dateCourante = new DateTime();
$dateCourante->add(new DateInterval('P20D'));
$dateFormatee = $dateCourante->format('d/m/Y');

echo "La date du jour + 20 jours est : " . $dateFormatee;
?>