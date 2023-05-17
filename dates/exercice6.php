<!-- Exercice 6
Afficher le nombre de jour dans le mois de février de l'année 2016. -->
<?php
$nombreJours = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo "Le mois de février 2016 compte " . $nombreJours . " jours.";
?>