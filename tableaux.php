<?php

/* Exercice 1
Créer un tableau months et l'initialiser avec les valeurs suivantes :
janvier
février
mars
avril
mai
juin
juillet
aout
septembre
octobre
novembre
décembre */

$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

/* Exercice 2
Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. */
echo $months[2];

/* Exercice 3
Avec le tableau de l'exercice , afficher la valeur de l'index 5. */
echo $months[5];

/* Exercice 4
Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. */
$months[7] = 'Août'; // Modifier le mois de "aout" pour "Août"

/* Exercice 5
Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. */
$departements = array(
    '59' => 'Nord',
    '62' => 'Pas-de-Calais',
    '02' => 'Aisne',
    '60' => 'Oise',
    '80' => 'Somme'
);

/* Exercice 6
Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. */
echo $departements['59'];

/* Exercice 7
Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. */
$departements['51'] = 'Marne';

/* Exercice 8
Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. */
foreach ($months as $month) {
    echo "$month <br>";
}

/* Exercice 9
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. */
foreach ($departements as $departement) {
    echo "$departement <br>";
}

/* Exercice 10
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département */
foreach ($departements as $key => $value) {
    echo "Le département $value a le numéro $key <br>";
}
