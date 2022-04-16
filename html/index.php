<div class="login_box">
<div class="login_box_head">
  <p>Login</p>
</div>
      <form class="" method="post">
          <input class="" type="text" id="username" name="username" placeholder="Username/Email"><br/>
          <input class="" type="password" id="password" name="password" placeholder="Password"><br/>
          <div class="">
          <a href="create_account.php">Create Account</a><br/>
          <a href="forgot_password.php">Forgot Password</a><br/>
        </div>
        <div class="login_status">
          <?php
            echo $login_status;
          ?>
        </div>
        <input type="submit" name="login" value="Login">
      </form>
    </div>
