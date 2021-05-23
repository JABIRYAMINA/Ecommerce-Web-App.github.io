<?php
if(!isset($_GET['viewall_cat'])){ 
if(!isset($_GET['add_prod'])){ 
if(!isset($_GET['view_allproducts'])){ 
    
    
    ?>
<div class="bodyright">
    <?php 
        if(isset($_GET['edit_cat'])) {
            include("edit_cat.php");
        } 
        if(isset($_GET['edit_product'])) {
            include("edit_prod.php");
        } 
    ?>
</div>
<?php } } } ?>
