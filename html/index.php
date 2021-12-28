<div class="container login_form bg-primary text-white ">
<div class="head-text text-center h4 p-3">
  <span>Login</span>
</div>
      <form class="" method="post">
          <label for="username">Username / Email</label><br/>
          <input class="w-75" type="text" id="username" name="username" placeholder="Enter Your Username or Email"><br/>
          <label for="password">Password</label><br/>
          <input class="w-75" type="password" name="password" placeholder="Enter Your Password"><br/>
          <a class="text-white link_login_form" href="create_account.php">Create Account</a><br/>
          <a class="text-white link_login_form" href="forgot_password.php">Forgot Password</a><br/>
          <?php
            echo $login_status;
          ?>
        <input class="btn btn-primary" type="submit" name="login" value="Login">
      </form>
    </div>
