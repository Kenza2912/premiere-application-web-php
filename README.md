# Application de Gestion de Produits

Cette application PHP permet à un utilisateur de renseigner différents produits via un formulaire. Les produits sont stockés en session et peuvent être consultés sur une page récapitulative. 

## Structure de l'Application

L'application se compose de trois pages principales :

### 1. `index.php`

Cette page présente un formulaire permettant de renseigner les informations suivantes :
- **Nom du produit** : Le nom du produit à ajouter.
- **Prix unitaire** : Le prix de chaque unité du produit.
- **Quantité désirée** : Le nombre d'unités du produit que l'utilisateur souhaite ajouter.

### 2. `traitement.php`

Ce script traite la requête provenant de `index.php` après soumission du formulaire. Il ajoute le produit à la session avec les informations suivantes :
- Nom du produit
- Prix unitaire
- Quantité
- Total calculé (prix unitaire × quantité)


### 3. `recap.php`

Cette page affiche tous les produits stockés en session avec leurs détails et présente le total général de tous les produits ajoutés.

## Technologies utilisées
<p align="left"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/>  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a>  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>

## Aperçus Visuels
Pour des aperçus visuels des pages index.php et recap.php:

 - Un aperçu du formulaire de saisie des produits.
   <img src="img/index.png" alt="Description de l'image" width="650"/>

 - Un aperçu de la liste des produits ajoutés et du total général.
   <img src="img/recap.png" alt="Description de l'image" width="650"/>

