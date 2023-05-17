<?php

/* Exercice 1
Faire une fonction qui retourne true. */

function test()
{
    return true;
}

$test = fn () => true;

/* Exercice 2
Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine. */
$test = fn ($txt) => $txt;

/* Exercice 3
Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines */
$test = fn ($txt1, $txt2) => $txt1 . $txt2;

/* Exercice 4
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux */

function exo4($n1, $n2)
{
    if ($n1 > $n2) {
        return "Le premier nombre est plus grand";
    } elseif ($n1 < $n2) {
        return "Le premier nombre est plus petit";
    } else {
        return "Les deux nombres sont identiques";
    }
}

/* Exercice 5
Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
 */
function exo5($number, $string)
{
    return $number . $string;
}

/* Exercice 6
Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prénom + ",tu as" + age + "ans". */

function exo6($nom, $prenom, $age)
{
    return "Bonjour $nom $prenom tu as $age ans";
}

/* Exercice 7
Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme
La fonction doit renvoyer en fonction des paramètres :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas. */
function exo7($age, $sexe)
{
    if ($sexe == 'Femme' && $age >= 18) {
        return 'Vous êtes une femme et vous êtes majeur';
    } elseif ($sexe == 'Femme' && $age < 18) {
        return 'Vous êtes une femme et vous êtes mineure';
    } elseif ($sexe == 'Homme' && $age >= 18) {
        return 'Vous êtes un homme et vous êtes majeur';
    } elseif ($sexe == 'Homme' && $age < 18) {
        return 'Vous êtes un homme et vous êtes mineur';
    }
}

/* Exercice 8
Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut. */
function exo8($n1 = 0, $n2 = 0, $n3 = 0)
{
    return $n1 + $n2 + $n3;
}

$result = exo8(1, 2, 3);
echo $result; // Affiche 6
