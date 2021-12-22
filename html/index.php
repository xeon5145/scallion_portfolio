<link rel="stylesheet" href="dist/css/index.css">
<div class="form-container">
<div class="head-text">
  <span>Login</span>
</div>
      <form class="main-form" method="post">
          <label for="username">Username / Email</label><br/>
          <input  type="text" id="username" name="username" placeholder="Enter Your Username or Email"><br/>
          <label for="password">Password</label><br/>
          <input type="password" name="password" placeholder="Enter Your Password"><br/>
        <a href="create_account.php">Create Account</a><br/>
        <a href="forgot_password.php">Forgot Password</a><br/>
        <?php
        echo $login_status;
         ?>
        <input class="btn btn-primary" type="submit" name="login" value="Login">
      </form>
    </div>
