<div class="login_form">
<div class="">
  <span>Login</span>
</div>
      <form class="" method="post">
          <label for="username">Username / Email</label><br/>
          <input class="" type="text" id="username" name="username" placeholder="Enter Your Username or Email"><br/>
          <label for="password">Password</label><br/>
          <input class="" type="password" name="password" placeholder="Enter Your Password"><br/>
          <a class="link_login_form" href="create_account.php">Create Account</a><br/>
          <a class="link_login_form" href="forgot_password.php">Forgot Password</a><br/>
          <?php
            echo $login_status;
          ?>
        <input class="login_button" type="submit" name="login" value="Login">
      </form>
    </div>
