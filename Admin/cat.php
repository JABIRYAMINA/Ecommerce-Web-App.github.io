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
               <tr>
               <?php include('functions/function.php');echo viewAllCat();?>
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
//ajouter categories

include('includes/connect.php');
    if(isset($_POST['add_cat'])){
    $name=$_POST['name'];
    $ajouter_cat=$pdo->prepare("INSERT INTO categories (name)VALUES('$name')");
    if($ajouter_cat->execute()) {
       echo "<script>alert('catégorie ajouter avec succés');</script>";
       echo "<script>window.open('index.php?viewall_cat','_self');</script>";
}else{
       echo "<script>alert('catégorie non ajouter');</script>";
} } //end add category
?>

