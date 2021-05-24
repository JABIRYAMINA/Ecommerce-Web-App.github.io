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
            <td>Entrer product name:</td>
            <td><input type="texte" name="price"></td>
        </tr>
        <tr>
            <td>Entrer product name:</td>
            <td><input type="file" name="picture"></td>
        </tr>
      
            <td>desc:</td>
            <td><input type="texte" name="description"></td>
        </tr>
</table>
    <button class="btn btn-secondary" name="add_prod" >Ajouter produit</button>
</form>
<?php

include('includes/connect.php');
    if(isset($_POST['add_prod'])){
    $name=$_POST['name'];
    $prix=$_POST['price'];
   
    $file = $_FILES['picture'];
    $fileName =$_FILES['picture']['name'];
    $fileTmpName =$_FILES['picture']['tmp_name'];
    $fileSize =$_FILES['picture']['size'];
    $fileError =$_FILES['picture']['error'];
    $fileType =$_FILES['picture']['type'];
    $fileExt= explode('.', $fileName);
    $fileActext= strtolower(end($fileExt));
    $allowed= array('jpg','jpeg','png','pdf');
    if(in_array($fileActext, $allowed)){
      if($fileError === 0){
       if($fileSize <1000000){
         $fileNameNew =uniqid('', true).".".$fileActext;
         $fileDestination= 'uploads/'.$fileNameNew;
         move_uploaded_file($fileTmpName,$fileDestination);
       

       }else{
           echo 'your files is to big';
       }


      }else{
          echo 'error';
      }
    }else{
        echo 'bravo';
    }
    $des=$_POST['description'];
  

    
    $add_prod=$pdo->prepare("INSERT INTO products (name,price,description)VALUES('$name','$prix','$des')");
    if($add_prod->execute()){
        echo "<script>alert('catégorie ajouter avec succés');</script>";
    }
    else{
        echo "<script>alert('catégorie non ajouter');</script>";
    }
        
}
?>