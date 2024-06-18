<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/css/uikit.min.css" />
    <title>Récapitulatif des produits</title>
</head>
<body>
    <?php var_dump($_SESSION); ?>
    <?php if(!isset($_SESSION['products']) || empty($_SESSION['products'])) {
        echo "<p> Aucun produit en session... </p>";

    }else{
        echo "<table class='uk-table uk-table-hover uk-table-divider'>",
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
                        "<td>" .$product['qtt']. "</td>",
                        "<td>" .number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€ </td>",
                    "</tr>";
            $totalGeneral += $product['total'];
            $totalQuantite += $product['qtt'];
        }
        echo "<tr>",
                    "<td colspan=3> Total général : </td>",
                    "<td><strong>".number_format($totalQuantite)."</strong></td>",
                    "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
                    
                    
             "</tr>",    
             "</tbody>",
             "</table>";

    }


     ?>




    <a href="http://premiere-application-web-php.test/index.php">index.php</a>


<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.5/dist/js/uikit-icons.min.js"></script>
</body>
</html>