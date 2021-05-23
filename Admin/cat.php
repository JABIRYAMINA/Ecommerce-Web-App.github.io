

<div class="">
<h3>voir tous les categories</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
        <th>number</th>
        <th>category name</th>
        <th>edit</th>
        <th>delete</th>
        </tr>  
        <tr>
            <?php include('functions/function.php'); echo viewAllCat() ?>
        </tr>
    </table>

</form>
<h3>Ajouter  catégoris</h3>
<form method="POST">
    <table>
        <tr>
            <td>Entrer categorie name:</td>
            <td><input type="texte" name="name"></td>
        </tr>
    </table>
    <button class="btn btn-secondary" name="ajouter_cat" >Ajouter catégories</button>
</form>
</div>


<?php 
echo ajouter_cat();
?>