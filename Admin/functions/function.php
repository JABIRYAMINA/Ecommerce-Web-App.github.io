<?php
function ajouter_cat(){
    include_once('includes/connect.php');
    if(isset($_POST['ajouter_cat'])){
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
    while($row= $fetch_cat->fetch()): 
        echo "<td></td>
              <td>".$row['name']."</td>";
    
    endwhile;
    
    

}

?>


