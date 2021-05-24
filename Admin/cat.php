<!--Ajouter categories-->

<div class="">
   <h3>voir tous les categories</h3>
        <form id="ad_cat" action="" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>number</th>
                    <th>category name</th>
                    <th>edit</th>
                    <th>delete</th>
       
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
                <button class="btn btn-secondary" name="add_cat" >Ajouter catégories</button>
        </form>
</div>

<?php
 
//directory add category
include('functions/function.php'); echo ajouter_cat();
?>