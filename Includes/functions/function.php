<?php 

function categories(){
    include_once('includes/connect.php');
    $fetch_cat=$pdo->prepare("SELECT * FROM categories WHERE id='17'");
    $fetch_cat->setFetchMode(PDO :: FETCH_ASSOC);
    $fetch_cat->execute();
    $row_cat=$fetch_cat->fetch();
    $cat_id=$row_cat['id'];
    echo "<h5>".$row_cat['name']."</h5>";
    
    $fetch_pro=$pdo->prepare("SELECT FROM products WHERE id ='$cat_id'");
    $fetch_pro->setFetchMode(PDO :: FETCH_ASSOC);
    $fetch_pro->execute();
    while($row_pro= $fetch_pro->fetch()):
    echo "<h5>".$row_pro['name']."</h5>";
    endwhile;
}
function viewimage(){
    
        $image=$pdo->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0, 3 ");
        $image->setFetchMode (PDO:: FETCH_ASSOC);
        $image->execute();
         while($row=$image->fetch()):
         echo "<tr>
            <td><img src='uploads/".$row['picture']."'alt='avatar'/></td>
        </tr>";
    endwhile;
}
?>
