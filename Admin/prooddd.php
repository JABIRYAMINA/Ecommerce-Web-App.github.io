

<div class="container">
<h3>Ajouter  catégoris</h3>
<form method="POST" action="">
    <table>
        <tr>
            <td>Entrer categorie name:</td>
            <td><input type="texte" name="name"></td>
        </tr>
    </table>
    <button class="btn btn-secondary" name="ajouter_cat" >Ajouter catégories</button>
</form>
</div>

<?php include_once('includes/connect.php');
    if(isset($_POST['ajouter_cat'])){
        $name=$_POST['name'];
$ajouter_cat=$pdo->prepare("INSERT INTO categories(name) VALUES('$name')");
if($ajouter_cat->execute()) {
    echo "<script>alert('catégorie ajouter avec succés');</script>";
}else{
    echo "<script>alert('catégorie non ajouter');</script>";
}
    }
?>