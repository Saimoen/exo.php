<!-- Exercice 8
Afficher la date du jour - 22 jours -->
<?php
$dateCourante = new DateTime();
$dateCourante->sub(new DateInterval('P22D'));
$dateFormatee = $dateCourante->format('d/m/Y');

echo "La date du jour - 22 jours est : " . $dateFormatee;
?>