<?php
session_start();
include("..//includes/templates/connect.php");

if(isset($_SESSION['username'])){
if(isset($_GET['action'])){
if($_GET['action'] =='add'){

    if(isset($_POST['submit'])){
        $name        =$_POST['name']; 
        $price       =$_POST['price'];
        $picture     =$_POST['picture'];
        $description =$_POST['description'];
        $created_at  =$_POST['created_at'];
        $updated_at  =$_POST['updated_at'];
        if($name&&$price&& $picture&&$description&&$created_at&&$updated_at){




   $stmt=$pdo->prepare("INSERT INTO products VALUES('$name','$price','$picture','$description','$created_at','$updated_at')");
   $stmt->execute();       

        }else{
            echo 'il faut remplir tous les champs';
        }

   
   
 }



?>
   <div class="container text-center">
        <h1 class="py-4 text-dark rounded">Admin</h1>
      <div class="d-flex justify-content-center">
        <form action="" method="POST" class="w-50" enctype="pultipart/form-data">
          <div class="py-2">
    <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">name</div>
          </div>

          <input type="text" name="name" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">prix</div>
            <input type="text" name="price" class="form-control" id="inlineFormInputGroup">
          </div>
         
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">image</div>
          </div>
          <input type="file" name="picture" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
      
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">description</div>
          </div>
          <textarea name="description" class="form-control" id="inlineFormInputGroup"></textarea>
          
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">created_at</div>
          </div>
          <input type="time" name="created_at" class="form-control" id="inlineFormInputGroup">
      
      
      </div>
      <div class="input-group-mb-2">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning">updated_at</div>
            </div>
          <input type="time" name="updated_at" class="form-control" id="inlineFormInputGroup">
     
      </div>
      <input type="submit" name="submit">
    </form>


<?php
}else if($_GET['action'] == 'modify'){

}else if($_GET['action'] == 'delete'){

}else{
    die('une erreur');
}
}else{

}   
}else{
    header('location:../home.php');
}
?>
<?php include("includes/templates/header.php"); ?>
<h1>Bienvenue<?php echo $_SESSION['username'];?></h1>

 
     <button class="btn btn-success" name="create" value="upload"><a href="?action=add">Ajouter un produit</a></button>
     <button class="btn btn-success" name="create" value="upload"><a href="?action=modify">Modifier un produit</a></button>   
     <button class="btn btn-success" name="create" value="upload"><a href="?action=delete">supprimer un produit</a></button>      
  

 

   
