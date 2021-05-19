<?php
include_once("init.php");
include_once($tpl . "header.php");

//check if user coming from http post request
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashepass = md5($password);
    //utilisateur existe ou non

    $stmt = $pdo->prepare("SELECT username, password FROM admins WHERE username = ? AND password = ?");
    $stmt->execute(array($username,  $hashepass));
    $count = $stmt->rowCount();
if($count > 0){
    echo 'welcom' .$username;
}
    
    
}

?>

<div class=container>
    <form class="mt-2" action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
        <img class="avatar" src="<?php echo $img; ?>login.jpg">
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
    </form>
</div>
</div>

<?php include_once($tpl . "footer.php");
?>