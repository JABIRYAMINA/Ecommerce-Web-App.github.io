<!--modifier produits-->
<!--directory function edit product-->
<?php include('functions/function.php'); echo edit_products();?>

<?php
include('includes/connect.php');
    if(isset($_POST['add_prod'])){
    $name=$_POST['name'];
    $prix=$_POST['price'];
    $des=$_POST['description'];
  
$add_prod=$pdo->prepare("INSERT INTO products (name,price,description)VALUES('$name','$prix','$des')");
    if($add_prod->execute()){
        echo "<script>alert('catégorie ajouter avec succés');</script>";
    }
        else{
        echo "<script>alert('catégorie non ajouter');</script>";
    }  } //end
?>
