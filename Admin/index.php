<?php include_once('includes/header.php');
 include_once('includes/bodyleft.php');
 include_once('includes/bodyright.php');
include("includes/connect.php");


?>
<?php
$fetch_pro=$pdo->prepare("SELECT * FROM products");
    $fetch_pro->setFetchMode (PDO:: FETCH_ASSOC);
    $fetch_pro->execute();
  

?>

 

   
