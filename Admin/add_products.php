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
    <button class="btn btn-secondary" name="add_prod" >Ajouter catégories</button>
</form>
</div>
<?php

include_once('includes/connect.php');
    if(isset($_POST['add_prod'])){
        $cat_id=$_POST['categ'];
        $name=$_POST['prod_name'];
        
     
      $file = $_FILES['file'];//images
     $fileName =$_FILES['file']['name'];
     $fileTmpName =$_FILES['file']['tmp_name'];
     $fileSize =$_FILES['file']['size'];
     $fileError =$_FILES['file']['error'];
     $fileType =$_FILES['file']['type'];
     $fileExt= explode('.',  $fileName);
     $fileActext= strtolower(end($fileExt));
     $allowed= array('jpg','jpeg','png','pdf');

     if(in_array($fileActext, $allowed)){
       if($fileError === 0){
        if($fileSize <1000000){
          $fileNameNew =uniqid('', true).".".$fileActext;
          $fileDestination= 'uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName,   $fileDestination);
          header('location:produits.php?uploadsuccess');

        }else{
            echo 'your files is to big';
        }


       }else{
           echo 'error';
       }
     }else{
         echo 'bravo';
     } }//fin images
    
     $ajouter_prod=$pdo->prepare("INSERT INTO products(name,picture,category_id) VALUES('$name','$file','$cat_id')");
   if($ajouter_prod->execute()){
    echo "<script>alert('prod ajouter avec succés');</script>";
}
else{
    echo "<script>alert('products non ajouter');</script>";
}
    
?>