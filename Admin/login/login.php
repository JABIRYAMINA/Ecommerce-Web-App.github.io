<?php
session_start();
include_once("../includes/header.php");
include_once("../includes/connect.php");

//check if user comming from HTTP post request
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedass = md5($password);
    
    //check if userexist in database
  $stmt = $pdo->prepare("SELECT username,password FROM admins WHERE username = ? AND password = ?");
  $stmt->execute(array($username, $hashedass));
//
$_SESSION['username'] = $username; //register session
header('location:dashboard.php')


        
      
 
}
?>



    <div class=container>
        <form class="mt-2" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <img class="avatar" src="..//assets/images/login.jpg">
            <h2 class="text-center">Admin</h2>
            <div class="input-div">
                <div class="i">
                    <i class="fa fa-user"></i>
                </div>
                <div>
                    <label>Username</label>
                    <input type="text" name="user" placeholder="Votre nom" autocomplete="off" required>
                </div>
            </div>
            <div class="input-div deux">
                <div class="i">
                    <i class="fa fa-lock"></i>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Mot de passe" autocomplete="new-password"
                        required>
                </div>
            </div>

            <button class="btn btn-secondary" type="submit" name="submit" value="login">login</button>

            <a href="forgotpassword.php" class="my-2">Forgotpassword</a><a href="..//signup.php" class="my-2">singnup</a>
            <a href="..//home.php" class="my-2">Home</a>
        </form>
    </div>
    </div>
<?php include_once("../includes/header.php");?>