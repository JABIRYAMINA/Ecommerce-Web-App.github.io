<?php

//voir tous les categories 
function viewAllCat(){
include_once('includes/connect.php');
    $fetch_cat=$pdo->prepare("SELECT * FROM categories"); 
    $fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
    $fetch_cat->execute();
    $i=1;
//boucle  
while($row= $fetch_cat->fetch()): 
    echo "<tr>
        <td>".$i++."</td>
        <td>".$row['name']."</td>
        <td><a href='index.php?edit_cat=".$row['id']."'>Edit</a></td>
        <td><a href='delete_cat.php?delete_cat=".$row['id']."'>Delete</a></td>
        </tr>";
endwhile; }//end view all category

//voir tous les produits
function viewAllProducts(){
include_once('includes/connect.php');
    $fetch_pro=$pdo->prepare("SELECT * FROM products");
    $fetch_pro->setFetchMode (PDO:: FETCH_ASSOC);
    $fetch_pro->execute();
    $i=1;
while($row=$fetch_pro->fetch()):
    echo "<tr>
        <td>".$i++."</td>
        <td>".$row['name']."</td>
        <td>".$row['price']."</td>
        <td><img src='uploads/".$row['picture']."'alt='avatar'/></td>
        </div><td>".$row['description']."</td>
        <td><a href='index.php?edit_product=".$row['id']."'>Edit</a></td>
        <td><a href='delete_cat.php?delete_pro=".$row['id']."'>Delete</a></td>
        </tr>";
endwhile;
}//end view all products

//modifier categories
function edit_cat(){
include_once('includes/connect.php');
    if(isset($_GET['edit_cat'])) {
        $cat_id=$_GET['edit_cat'];
        $fetch_cat_name=$pdo->prepare("SELECT * FROM categories WHERE id='$cat_id'");
        $fetch_cat_name->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_cat_name->execute();
        $row=$fetch_cat_name->fetch();
    echo "<form method='POST'>
    <table>
        <tr>
            <td>Update categorie name:</td>
            <td><input type='texte' name='update_cat_name' value='".$row['name']."' /></td>
        </tr>
    </table>
    <button class='btn btn-secondary' name='update_cat' >update catégories</button>
</form>";
if(isset($_POST['update_cat'])){
    $update_cat_name=$_POST['update_cat_name'];
    $update_cat=$pdo->prepare("UPDATE categories SET name= '$update_cat_name' WHERE id='$cat_id'");
if($update_cat->execute()){
    echo "<script>alert('category updated successfully');</script>";
    echo "<script>window.open('index.php?viewall_cat','_self');</script>";
} } 
} } //end edit category

//edit products
function edit_prod(){
     include_once('includes/connect.php');
        if(isset($_GET['edit_product'])) {
            $pro_id=$_GET['edit_product'];
            $fetch_pro=$pdo->prepare("SELECT * FROM products WHERE id='$pro_id'");
            $fetch_pro->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_pro->execute();
            $row= $fetch_pro->fetch();
            
        echo "
           <div class='container'>
            <h3>Ajouter products</h3>
            <form method='POST' enctype='multipart/form-data'>
                <table>
                <tr>
                    <td>categorie name:</td>
                    <td><section name='name'>
                    <?php include('functions/function.php'); echo viewAllCat();?>
                    </section></td>
                    </tr>
                    <tr>
                        <td>update product name:</td>
                        <td><input type='texte' name='name' value='".$row['name']."'></td>
                    </tr>
                    <tr>
                        <td>update  product name:</td>
                        <td>
                            <input type='texte' name='price' value='".$row['price']."'>
                        </td>
                    </tr>
                    <tr>
                        <td>update  product name:</td>
                        <td><input type='file' name='picture'>  
                        <img src='uploads/".$row['picture']."'>
                        </td>
                    </tr>
                        <td>update desc:</td>
                        <td><input type='texte' name='description' value='".$row['description']."'></td>
                    </tr>
                </table>
                    <button class='btn btn-secondary' name='edit_product'>modifier produit</button>
            </form>";
            if(isset($_POST['edit_product'])){
                $update_pro=$_POST['name'];
                $update_price=$_POST['price'];
                $update_img=$_FILES['picture']['name'];
                $target='uploads/';
                $file_path=$target.basename($_FILES['picture']['name']);
                $file_tmp=$_FILES['picture']['tmp_name'];
                $file_store='uploads/'.$ $update_img;
                move_uploaded_file($file_tmp, $file_store);
                $update_desc=$_POST['description'];
                $update_product=$pdo->prepare("UPDATE products SET name= '$update_pro',price='$update_price',picture='$update_img',description='$update_desc' WHERE id='$pro_id'");
            if($update_product->execute()){
                echo "<script>alert('product updated successfully');</script>";
                echo "<script>window.open('index.php?viewall_prod','_self');</script>";
            } } 
             
} }//end edit product

//delete category

function delete_cat(){
   
        include('includes/connect.php');
        $delete_id=$_GET['delete_cat'];
        $delete_cat=$pdo->prepare("DELETE FROM categories WHERE id='$delete_id'");
        if($delete_cat->execute()){
            echo "<script>alert('category deleted successfully');</script>";
            echo "<script>window.open('index.php?viewall_cat','_self');</script>";
        }
    }
//end delete category

//delete products

function delete_product(){
    include('includes/connect.php');
    $delete_prod_id=$_GET['delete_pro'];
    $delete_prod=$pdo->prepare("DELETE FROM products WHERE id='$delete_prod_id'");
    if($delete_prod->execute()){
        echo "<script>alert('product deleted successfully');</script>";
        echo "<script>window.open('index.php?viewall_prod','_self');</script>";
    }
}
?>



