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
    ?>
</div>
<?php } } } ?>
