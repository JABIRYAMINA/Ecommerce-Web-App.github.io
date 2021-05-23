<div class="container">
<h3>Ajouter products</h3>
<form method="POST" enctype="multipart/form-data">
    <table>
    <tr>
            <td>categorie name:</td>
            <td><select name="categ">
                <?php echo include('includes/connect.php');
                $fetch_cat=$pdo->prepare("SELECT * FROM categories"); 
                $fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
                $fetch_cat->execute();
                while($row= $fetch_cat->fetch()): 
                    echo "<option value'".$row['id']."'>".$row['name']."</option>";
                endwhile;    
                   ?>
            </select></td>
        </tr>
        <tr>
            <td>Entrer product name:</td>
            <td><input type="texte" name="prod_name"></td>
        </tr>
        <tr>
            <td>Entrer product name:</td>
            <td><input type="texte" name="price"></td>
        </tr>
        <tr>
            <td>Entrer product name:</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td>desc:</td>
            <td><input type="texte" name="description"></td>
        </tr>
</table>
    <button class="btn btn-secondary" name="add_prod" >Ajouter produit</button>
</form>
</div>
