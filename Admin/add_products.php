<!--Ajouter produits-->
<div class="container">
<h3>Ajouter products</h3>
<form method="POST" enctype="multipart/form-data">

    <table>
    <tr>
        <td>categorie name:</td>
        <td><section name="name">
            <?php include("functions/function.php"); echo viewAllCat(); ?>
        </section></td>
        </tr>
        <tr>
            <td>Entrer product name:</td>
            <td><input type="texte" name="name"></td>
        </tr>
        <tr>
            <td>Entrer prix:</td>
            <td><input type="texte" name="price"></td>
        </tr>
        <tr>
            <td>Entrer image:</td>
            <td><input type="file" name="picture"></td>
        </tr>
      
            <td>description:</td>
            <td><input type="texte" name="description"></td>
        </tr>
     
       
    </table>
    <button class="btn btn-secondary" name="add_prod" >Ajouter produit</button>
</form>

<!--function add products-->
<?php
include('includes/connect.php');
    if(isset($_POST['add_prod'])){
        $name=$_POST['name'];
        $prix=$_POST['price'];
        $des=$_POST['description'];
        $target='uploads/';
        $file_path=$target.basename($_FILES['picture']['name']);
        $file_name=$_FILES['picture']['name'];
        $file_tmp=$_FILES['picture']['tmp_name'];
        $file_store='uploads/'.$file_name;
        move_uploaded_file($file_tmp, $file_store);
      
$add_prod=$pdo->prepare("INSERT INTO products (name,price,picture,description)VALUES('$name','$prix','$file_name','$des')");
    if($add_prod->execute()){
        echo "<script>alert('catégorie ajouter avec succés');</script>";
    }
    else{
        echo "<script>alert('catégorie non ajouter');</script>";
    }  }//end function add products
?>