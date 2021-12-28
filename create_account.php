<?php
include "include/back_imp.php";
include "include/mailer.php";
// --------------------default variales-------------------------
$account_message = "";
// --------------------default variales-------------------------
// ------------------------create account----------------------
if(isset($_POST['crt_accnt']))
{
  $f_name = $_POST['f_name'];
  $l_name  = $_POST['l_name'];
  $email = $_POST['email'];
  $u_name = $_POST['u_name'];
  $pwd_c = $_POST['pwd_c'];
  // ------------------unique id-------------------------
  $str_uid = strval($u_name.$pwd_c);
  $uid = hash('SHA256',crc32($str_uid));
  // ------------------unique id-------------------------
  // ----------------------------pwd ecryption-------------------------
  // SHA 256 password encryption
  $enc_pwd = crypt($pwd_c,'$5$rounds=5000$heyladiesdropitdown$');
  // ----------------------------pwd ecryption--------------------------

  $acc_crt = "INSERT INTO user_accounts (firstname, lastname, email, username, u_id , password)
              VALUES ('$f_name','$l_name','$email','$u_name','$uid','$enc_pwd') ";

  if(mysqli_query($op_conn,$acc_crt))
  {
    $mail->Subject = "Welcome To Onion";
    $mail->Body = "your account has been created successfully , please verify your email using this link";
    $mail->addAddress($email);
    if($mail->Send())
    {
      $account_message = "<p>Your account has been created successfully</p>";
    }
    else
    {
      $account_message = "<p>Something went wrong</p>";
    }
  }
  else
  {
    $account_message = "<p>Something went wrong , Please try again</p>";
  }
}
// ------------------------create account----------------------
include "include/main_header.php";
include "html/create_account.php";
include "include/main_footer.php";
 ?>
