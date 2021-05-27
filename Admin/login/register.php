
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
  <!--Bootstrap-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
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
   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Inscription</div>
     <div class="card-body">
       <form method="post" action="register.php">
        
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-12">
               <label for="exampleInputName">Username</label>
               <input class="form-control" id="exampleInputName" type="text"   name="username"  >
             </div>
           </div>
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email"  >
         </div>
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-6">
               <label for="exampleInputPassword1">Password</label>
               <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" >
             </div>
            <div class="col-md-6">
               <label for="exampleInputPassword1">Confirm Password</label>
               <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" >
             </div>
           </div>
         </div>
          <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
       </form>
       <div class="text-center">
         <a class="d-block small mt-3" href="login.php">Login Page</a>
       <!--- <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
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