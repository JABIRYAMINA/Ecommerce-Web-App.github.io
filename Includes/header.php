<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Bootstrap-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $css; ?>style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Home</title>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light my-bg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="home.php">
        <img src="assets/images/logo.jpg" height="60px" width="75px">
        Emma cosmétiques
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRightAlignExample"
        aria-controls="#navbarRightAlignExample" aria-expanded="false" aria-label="Toggle navigation">
        <span><i id="bar" class="fa fa-bars"></i></span>
      </button>
    </button>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#search">
      <span><i class="fa fa-search"></i></span>

    </button>
      <div class="collapse navbar-collapse" id="navbarRightAlignExample">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="a-propos.php">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="shop.php">Shop</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="signup.php">Inscrire</a>
          </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="admin/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php">logout</a>
          </li>
         
          <li class="nav-item">
            <div class="navbar-collapse collapse right">
              <a href="#" data-bs-toggle="collapse" data-bs-target="#search">
            <i class="fa fa-search"></i>
          </a>
        </div>
        <div class="collapse clearfix" id="search">
          <form method="GET" action="results.php" class="navbar-form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="search" name="user_query" required>
              <button type="submit" name="search" value="search">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </div>
            <a href="cart.php">
            <i class="fa fa-shopping-bag"></i>
            <span>4 items in your cart</span>
          </a>
          </li>
    </div>
    </div>
  </nav>