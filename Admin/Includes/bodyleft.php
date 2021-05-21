



<div class="container-fluid">
<div id="header">
    <h2>Gestion</h2>
    <ul>
        <li><a href="index.php">Index</a></li>
        <li><a href="index.php?voir_tt_cat">tout les categorie</a></li>
        <li><a href="index.php?voir_tt_produit">sub all produit</a></li>
       
    </ul>
    </div>
</div><!--fin containerfluid-->
<?php
if(isset($_GET['voir_tt_cat'])){
include("cat.php");
}
if(isset($_GET['voir_tt_produit'])){
    include("produits.php");
}
?>