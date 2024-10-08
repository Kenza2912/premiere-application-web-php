<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/css/uikit.min.css" />
    
    <title>Récapitulatif des produits</title>
</head>
<body>
    <!--****************************************NAVBAR************************************************ -->

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

    <div class="recap" >
        <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" id="img"  data-src="https://images.unsplash.com/photo-1495321308589-43affb814eee?fit=crop&w=650&h=433&q=80" uk-img="loading: eager">

        </div>
        <div class="tableau-recap">
            <?php if(!isset($_SESSION['products']) || empty($_SESSION['products'])) {
                     echo "<p> Aucun produit en session... </p>";

                }else{
                    echo "<table class='uk-table uk-table-responsive uk-table-divider' id='tableau'>",
                        "<thead>",
                            "<tr>",
                                "<th>#</th>",
                                "<th>Nom</th>",
                                "<th>Prix</th>",
                                "<th>Quantité</th>",
                                "<th>Total</th>",
                            "</tr>",
                        "</thead>",
                        "<tbody>";
                $totalGeneral = 0;
                $totalQuantite = 0;
                foreach($_SESSION['products'] as $index => $product) {
         
           
                        echo "<tr>",
                                    "<td>" .$index. "</td>",
                                    
                                    "<td>" .$product['name']. "</td>",
                                    "<td>" .number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€ </td>",
                                    "<td id='operateur'><a class='moin' href='traitement.php?action=down-qtt&id=$index'class='quantite'>-</a>" .$product['qtt']. "<a class='plus' href='traitement.php?action=up-qtt&id=$index' class='quantite'>+</a></td>",
                                    "<td>" .number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€ </td>",
                                    
                                    "<td><a href='traitement.php?action=delete&id=$index'class='uk-icon-link' uk-icon='trash'></a></td>",

                                "</tr>";
                        $totalGeneral += $product['total'];

                        $totalQuantite += $product['qtt'];
                    }
                        echo "<tr>",
                                    "<td colspan=3><strong>  Total général :</strong> </td>",
                                    "<td><strong>".number_format($totalQuantite)."</strong></td>",
                                    "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
                                        
                                
                            "</tr>",    
                        "</tbody>",
                     "</table>";

    }
   
  
     ?>

    </div>
    <div id="lien">
        <div class="lien" >
            <a href="traitement.php?action=deleteAll">Vider le panier</a><br>
        
        
            <a href="http://premiere-application-web-php.test/index.php">Poursuivre vos achats</a>
   
        </div>
  

  </div>

    


<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit-icons.min.js"></script>
</body>
</html>