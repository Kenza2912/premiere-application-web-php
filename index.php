<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Ajout produit</title>
</head>
<body>
    
    <h1 class="uk-heading-line uk-text-center">Ajouter un produit</h1>
    <form class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light" action="traitement.php" method="post">
        <p>
            <label>
                Nom du produit : 
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                Prix du produit :
                <input type="number" step="any" name="price">
                
            </label>
        </p>
        <p>
            <label>
                Quantité désirée:
                <input type="number" name="qtt" value="1"> 
            </label>
        </p>
        <p>         
            <input class="uk-button uk-button-default" type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>
    <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
           
            <li>
                <a href="#">Panier</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="http://premiere-application-web-php.test/recap.php">Recapitulatif</a></li>
                        
                    </ul>
                </div>
            </li>
            
        </ul>

    </div>
</nav>
 
    




<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit-icons.min.js"></script>
</body>
</html>