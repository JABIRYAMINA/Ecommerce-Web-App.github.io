

<div class="container">
<h3>Ajouter nouveau produits</h3>
<form method="POST" action=""  enctype="multipart/form-data">
    <table>
    <tr>
            <td>name :</td>
            <td><input type="texte" name="name"></td>
        </tr>
  <tr>
            <td>prix de produit :</td>
            <td><input type="texte" name="price"></td>
        </tr>
        <tr>
            <td>image :</td>
            <td><input type="file" name="files[]" multiple></td>
        </tr>
        <tr>
            <td>description :</td>
            <td><input type="texte" name="description"></td>
        </tr>
    </table>
    <button class="btn btn-secondary" name="submit" >Ajouter produit</button>
</form>
</div>

