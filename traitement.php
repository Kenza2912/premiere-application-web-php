<?php 

session_start();
//Vérifier l'existence d'une requête POST
//La condition sera alors vraie seulement si la requête POST transmet bien une clé "submit" au serveur.

if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
    if($name && $price &&$qtt){
        $product =[
            "name" =>$name,
            "price" =>$price, 
            "qtt" =>$qtt, 
            "total" =>$price * $qtt
        ];

        $_SESSION['products'] [] = $product;
    }
}

header("Location:index.php");

// effectue une redirection grâce à la fonction header()
// La fonction PHP filter_input() permet d'effectuer une validation ou un nettoyage de chaque donnée transmise par le formulaire en employant divers filtres


// FILTER_SANITIZE_STRING (champ "name") : ce filtre supprime une chaîne de caractères de toute présence de caractères spéciaux et de toute balise HTML potentielle ou les encode. Pas d'injection de code HTML possible !


// FILTER_VALIDATE_FLOAT (champ "price") : validera le prix que s'il est un nombre à virgule (pas de texte ou autre…), le drapeau FILTER_FLAG_ALLOW_FRACTION est ajouté pour permettre l'utilisation du caractère "," ou "." pour la décimale.

// FILTER_VALIDATE_INT (champ "qtt") : ne validera la quantité que si celle-ci est un nombre entier différent de zéro (qui est considéré comme nul).

