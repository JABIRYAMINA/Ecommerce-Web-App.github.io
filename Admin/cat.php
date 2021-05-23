

<div class="">
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


<?php include('functions/function.php'); 
echo ajouter_cat();
?>