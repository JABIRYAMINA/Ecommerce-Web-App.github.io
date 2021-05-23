<?php 
 if(isset($_POST['submit'])){
     $file = $_FILES['file'];
     
     $fileName =$_FILES['file']['name'];
     $fileTmpName =$_FILES['file']['tmp_name'];
     $fileSize =$_FILES['file']['size'];
     $fileError =$_FILES['file']['error'];
     $fileType =$_FILES['file']['type'];
     $fileExt= explode('.',  $fileName);
     $fileActext= strtolower(end($fileExt));
     $allowed= array('jpg','jpeg','png','png');
     if(in_array($fileActext, $allowed)){
       if($fileError === 0){
        if($fileSize <1000000){
          $fileNameNew =uniqid('', true).".".$fileActext;
          $fileDestination= 'uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName,   $fileDestination);
          header('location:image.php?uploadsuccess');

        }else{
            echo 'your files is to big';
        }


       }else{
           echo 'error';
       }
     }else{
         echo 'bravo';
     }
     


 }


?>