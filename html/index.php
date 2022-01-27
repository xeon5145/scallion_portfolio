<div class="login_form">
<div class="login_form-header">
  <p>Login</p>
</div>
      <form class="" method="post">
          <input class="" type="text" id="username" name="username" placeholder="Username/Email"><br/>
          <input class="" type="password" name="password" placeholder="Password"><br/>
          <div class="login-links-box">
          <a href="create_account.php">Create Account</a><br/>
          <a href="forgot_password.php">Forgot Password</a><br/>
        </div>
          <?php
            echo $login_status;
          ?>
        <input type="submit" name="login" value="Login">
      </form>
    </div>
