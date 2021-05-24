<?php
//products
function ajouter_prod(){
    include("includes/connect.php");
    if(isset($_POST['ajouter'])){
    $nom=$_POST['name'];
    $price=$_POST['price'];
    $file=$_POST['picture'];
    $desc=$_POST['description'];
$add_pro=$pdo->prepare("INSERT INTO products(name,price,picture,description,category_id)VALUES('$nom','$price','$file','$desc')");        
if($add_pro->execute()){
    echo "<script>alert('produit ajouter');</script>";

}else{
    echo "<script>alert('produit non ajouter');</script>";
}   
}
}









function ajouter_cat(){
    include_once('includes/connect.php');
    if(isset($_POST['add_cat'])){
       $name=$_POST['name'];
        $ajouter_cat=$pdo->prepare("INSERT INTO categories(name) VALUES('$name')");
        if($ajouter_cat->execute()) {
    echo "<script>alert('catégorie ajouter avec succés');</script>";
}
else{
    echo "<script>alert('catégorie non ajouter');</script>";
}
    }


}

 



function viewAllCat(){
    include_once('includes/connect.php');
    $fetch_cat=$pdo->prepare("SELECT * FROM categories"); 
    $fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
    $fetch_cat->execute();
    $i=1;
    while($row= $fetch_cat->fetch()): 
        echo "<tr>
              <td>".$i++."</td>
              <td>".$row['name']."</td>
              <td><a href='index.php?edit_cat=".$row['id']."'>Edit</a></td>
              <td><a href='#'>Delete</a></td>
              </tr>";
    
    endwhile;

}
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
            <td><img src='uploads/".$row['picture']."'/></td>
            <td>".$row['description']."</td>
            <td><a href='index.php?edit_product=".$row['id']."'>Edit</a></td>
            <td><a href='#'>Delete</a></td>
            </tr>";
    endwhile;


}
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
            }

        }

    }
}
function edit_products(){
     include_once('includes/connect.php');
        if(isset($_GET['edit_product'])) {
            $pro_id=$_GET['edit_product'];
            $fetch_pro=$pdo->prepare("SELECT * FROM products WHERE id='$pro_id'");
            $fetch_pro->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_pro->execute();
            $row= $fetch_pro->fetch();
         
}
}
?>

