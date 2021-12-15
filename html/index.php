    <div class="">
      <form class="" method="post">
        <input type="text" name="username" placeholder="Enter Your Username or Email">
        <input type="password" name="password" placeholder="Enter Your Password">
        <a href="create_account.php">Create Account</a>
        <a href="forgot_password.php">Forgot Password</a>
        <?php
        echo $login_status;
         ?>
        <input type="submit" name="login" value="Login">
      </form>
    </div>
