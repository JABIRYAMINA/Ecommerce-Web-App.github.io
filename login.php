

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Bootstrap-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Admin/Layout/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Home</title>

</head>

<body>

<div class=container>
    <form class="mt-2" action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
        <img class="avatar" src="assets/images/login.jpg">
        <h2 class="text-center">Admin</h2>
        <div class="input-div">
            <div class="i">
                <i class="fa fa-user"></i>
            </div>
            <div>
                <label>Username</label>
                <input type="text" name="username" placeholder="Votre nom" autocomplete="off" required>
            </div>
        </div>
        <div class="input-div deux">
            <div class="i">
                <i class="fa fa-lock"></i>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Mot de passe" autocomplete="new-password" required>
            </div>
        </div>
        <a href="forgotpassword.php" class="my-2">Forgotpassword</a>
        <button class="btn btn-secondary" type="submit" name="login" value="login">login</button>
        <a href="signup.php" class="my-2">singnup</a>
        <a href="home.php" class="my-2">Home</a>
    </form>
</div>
</div>

