

<div class="bodyleft">
    <h3>gestion admin</h3>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?viewall_cat">View all categories</a></li>
        <li><a href="index.php?viewall_prod">View all producs</a></li>
      
       
    </ul>

</div>
<?php
if(isset($_GET['viewall_cat'])){
    include('cat.php');
}
if(isset($_GET['viewall_prod'])){
    include('produits.php');
}
?>
