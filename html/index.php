<div class="box">
  <div class="info_box">
              <p>How to use Scallion Portfolio?</p></br>
              <h4><u>Step1:</u> Login/Create your account.</h4></br>
              <h4><u>Step2:</u> Add any crypto to your list by filling the form.</h4></br>
              <h4><u>Step3:</u> Enjoy your live prices and your current profit and loss in realtime.</h4>
    </div>
<div class="login_box">
<div class="login_box_head">
  <p>Login</p>
</div>
      <form class="" method="post">
          <input class="" type="text" id="username" name="username" placeholder="Username/Email" required><br/>
          <input class="" type="password" id="password" name="password" placeholder="Password"><br/>
          <div class="">
          <a href="create_account.php">Create Account</a><br/>
          <a href="forgot_password.php">Forgot Password</a><br/>
        </div>
          <?php
            echo $login_status;
          ?>
        <input type="submit" name="login" value="Login">
      </form>
    </div>
</div>
..
