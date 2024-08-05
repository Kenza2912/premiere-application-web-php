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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <li><a href="http://premiere-application-web-php.test/recap.php">PANIER</a><i class="fa-solid fa-cart-shopping"></i></li>
                </ul>
            </div>
        </div>
       
      
    </nav>

    <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" id="image" data-src="https://images.unsplash.com/photo-1495321308589-43affb814eee?fit=crop&w=650&h=433&q=80" uk-img="loading: eager">
    <main class="produit">
        <div class="card">
            <h1>Ajouter un produit</h1>
            <form  action="traitement.php?action=addProduct" method="post">
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
                    <input id="submit" class="uk-button uk-button-secondary uk-width-1-1" type="submit" name="submit" value="Ajouter le produit">
                </p>
            </form>

            
        </div>
        <div class="article">
        <i class="fa-solid fa-cart-shopping" id="panier"></i>
        <p class="total-qqt">Quantité totale d'articles : <?php echo $totalQuantite; ?></p>
     </div> 
       
    </main>
   
    </div>

      
    
    
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