<?php

// Crée une fonction nommée sayHello permettant d'écrire "Hello Nite Owl".

// function sayHello()
// {
//     echo "Hello Nite Owl";
// }


// En ré-utilisant notre fonction "sayHello()"
// Modifie la fonction pour qu'elle retourne "Hello Nite Owl" plutôt que de l'afficher directement.
// Cette fonction ne doit pouvoir retourner que des chaînes.

// function sayHello() : string
// {
//     return "Hello Nite Owl";
// }



// Toujours à partir de ta fonction "sayHello()"

// Modifie la en lui ajoutant un paramètre nommé "name" de type string
// Modifie la fonction pour qu'elle retourne "Hello {name}"
// Rend le paramètre "name" optionnel. Si rien n'est précisé, ta fonction devra retourner "Hello Dr. Manhattan"


function sayHello(string $name = "Dr. Manhattan") : string
{
    return "Hello $name";
}


function whoAmI(string $name, array $watchmen):string
{
    $isInArray = in_array($name, $watchmen);
    if ($isInArray) {
        return "$name est un watchman";
    } else {
        return "$name est un intrus";
    }
}
