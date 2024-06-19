<?php

session_start();
$totalQuantite = 0;
if(isset($_SESSION['products'])){
    foreach($_SESSION['products'] as $index => $product) {
        $totalQuantite += $product['qtt'];
    }

}
if(isset($_GET['action'])){
    if(isset($_POST['submit'])){
        if($name && $price &&$qtt){
            $_SESSION['message'] = "Produit enregistré avec succès !";
            unset($GLOBALS['message']);
        }
        else $_SESSION['message'] = "Les données saisies sont incorrectes !";
        unset($GLOBALS['message']);

    }
    else $_SESSION['message'] = "Vous devez soumettre le formulaire !";

}

 $message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/css/uikit.min.css" />
    
    <title>Ajout produit</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-centre">
            <div>
                <ul class="ul-navbar">
                    <li><a href="#">FEMME</a></li>
                    <li><a href="#">HOMME</a></li>
                    <li><a href="#">ENFANTS</a></li>
                    <li><a href="#">HOME</a></li>
                    
                </ul>
            </div>
            <div>
                <ul class="navbar-right">
                    <li><a href="http://premiere-application-web-php.test/recap.php">PANIER</a></li>
                </ul>
            </div>
        </div>
       
      
    </nav>

       


    
    <h1 class="uk-heading-line uk-text-center">Ajouter un produit</h1>
    <form class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light" action="traitement.php?action=addProduct" method="post">
        <p>
            <label>
                Nom du produit : 
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                Prix du produit :
                <input type="number" step="any" name="price" min="0" required>
                
            </label>
        </p>
        <p>
            <label>
                Quantité désirée:
                <input type="number" name="qtt" value="1" min="1" required> 
            </label>
        </p>
        <p>         
            <input class="uk-button uk-button-default" type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>
    
 
    <p>Quantité totale d'articles : <?php echo $totalQuantite; ?></p>
<?php if(!empty($message)) {?>
    <div class="message" id="message" >  <?php echo $message; }?></div>


<script>
    setTimeout(function() {
       const message =document.getElementById("message");
       
       if(message){
        message.classList.add("hidden");
       } 
    }, 4000);
</script>

<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit-icons.min.js"></script>
</body>
</html>