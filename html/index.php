<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="">
      <form class="" method="post">
        <input type="text" name="username" placeholder="Enter Your Username or Email">
        <input type="password" name="password" placeholder="Enter Your Password">
        <?php
        echo $login_status;
         ?>
        <input type="submit" name="login" value="Login">
      </form>
    </div>
  </body>
</html>
