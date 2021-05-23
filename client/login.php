<?php


include_once("../includes/connect.php");
if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $pass=md5($_POST['pass']);
    if((!empty($user)) && (!empty($pass))){
        $errorMessage='bravo';
    }else{
        $successMessage='veuillez remplir tous';
    }

}
?>



<div class=container>
  
        <form class="mt-2" action="" method="POST">
            <img class="avatar" src="..//assets/images/login.jpg">
            <h2 class="text-center">Admin</h2>
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
<button class="btn btn-secondary" type="submit" name="submit" value="login">login</button></form>
 
</div>