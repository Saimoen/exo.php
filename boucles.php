<?php

/* Exercice 1
Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer */

for ($i = 0; $i <= 10; $i++) {
    echo $i;
}

/* Exercice 2
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieure à 20 :

multiplier la première variable avec la deuxième
afficher le résultat
incrementer la première variable */
$ran = 69;

for ($first = 0; $first <= 20; $first++) {
    $resultat = $first * $ran;
    echo $resultat . "<br>";
}

/* Exercice 3
Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieure ou égale à 10 :

multiplier la première variable avec la deuxième
afficher le résultat
décrémenter la première variable */
$random = 70;

for ($premiereValeur = 100; $premiereValeur > 10; $premiereValeur--) {
    $resultat = $premiereValeur * $random;
    echo $resultat . "<br>";
}

/* Exercice 4
Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer de la moitié de sa valeur
 */
$un = 1;

while ($un < 10) {
    echo $un . "<br>";
    $un += $un / 2;
}


/* Exercice 5
En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. */
$first = 1;

while ($first <= 15) {
    echo 'On y arrive presque.<br>';
    $first++;
}

/* Exercice 6
En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. */
$first = 20;

while ($first >= 0) {
    echo 'C\'est presque bon';
    $first--;
}

/* Exercice 7
En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. */
$hundred = 1;

while ($hundred <= 100) {
    echo 'On tient le bon bout.<br>';
    $hundred += 15;
}

/* Exercice 8
En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. */
$two = 200;

while ($two <= 0) {
    echo 'Enfin !!!! <br>';
    $two--;
}
