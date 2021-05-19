<?php

include_once("includes/templates/header.php");
?>
<div class="container-fluid" register >
        <div class="py-5">
            <h1 class="text-white">Sign in</h1>
       
    <form class="form-control" action="" method="POST">
        <label>Username</label>
        <input class="link" type="text" name="username" required>
        <label>Email</label>
        <input class="link" type="email" name="email" required>
        <label>Password</label>
        <input class="link" type="password" name="password" required>
        <label>Confirm password</label>
        <input class="link" type="password" name="confirmation" required>
        <button type="submit" name="register">Register</button>
        Already a user<a href="login.php">Login</a>
    
    </form>
    </div>