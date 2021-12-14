<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <?php
      echo $account_message;
       ?>
    </div>
<form method="post">
<input type="firstname" name="f_name" placeholder="Enter Firstname">
<input type="lastname" name="l_name" placeholder="Enter Lastname">
<input type="email" name="email" placeholder="Enter Email">
<input type="username" name="u_name" placeholder="Choose Username">
<input type="text" name="pwd_p" placeholder="Choose Password">
<input type="password" name="pwd_c" placeholder="Confirm Password">
<input type="submit" name="crt_accnt" value="Submit">
</form>
  </body>
</html>
