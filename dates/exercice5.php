<!-- Exercice 5
Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->
<?php
$dateCourante = time();
$date16Mai2016 = strtotime("16 May 2016");

$diffEnSecondes = $dateCourante - $date16Mai2016;
$diffEnJours = abs(round($diffEnSecondes / (60 * 60 * 24)));

echo "Il y a " . $diffEnJours . " jours entre le 16 mai 2016 et aujourd'hui.";
?>