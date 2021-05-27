
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<title>Home</title>

 <!-- Bootstrap core CSS-->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <!-- Custom fonts for this template-->
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!-- Custom styles for this template-->
 <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
 <div class="container">
   <div class="card card-login mx-auto mt-5">
     <div class="card-header">Login</div>
     <div class="card-body">
       <form method="post" action="login.php">
        
         <div class="form-group">
           <label for="exampleInputEmail1">Username</label>
           <input class="form-control"  type="text" name="username">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input class="form-control"  type="password" name="password">
         </div>
         
        
         <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
       </form>
       <div class="text-center">
         <a class="d-block small mt-3" href="register.php">connecter</a>
      <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
       </div>
     </div>
   </div>
 </div>
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>