

<div class="bodyleft">
    <h3>gestion admin</h3>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?viewall_cat">View all categories</a></li>
        <li><a href="index.php?add_prod">Add producs</a></li>
        <li><a href="index.php?viewall_prod">View all producs</a></li>
      
       
    </ul>

</div>
<?php
if(isset($_GET['viewall_cat'])){
    include('cat.php');
}
if(isset($_GET['add_prod'])){
    include('add_products.php');
}
if(isset($_GET['viewall_prod'])){
    include('view_allproducts.php');
}
?>
