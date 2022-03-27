<?php
include "include/back_imp.php";
include "include/mailer.php";
// ------------empty variable----------------------------
$fgt_pwd_message = "";
// ------------empty variable----------------------------
// ------------------------------data fetch--------------------------
if(isset($_POST['fgt_pwd']))
{
  $user_mail = $_POST['fgt_email'];
  $cred_fetch = "SELECT u_id,email FROM user_accounts WHERE email = '$user_mail'";
  $cf_id = $op_conn->query($cred_fetch);
  if($cf_id->num_rows > 0)
  {
    while($cf_fetch = $cf_id->fetch_assoc())
    {
      $cf_email = $cf_fetch['email'];
      $mail->Subject = "Scallian Portfolio Recovery";
      $mail->Body = "
      Recovery Mail
      ";
      $mail->addAddress($cf_email);
      if($mail->send())
      {
        $fgt_pwd_message = "<p>Recovery link has been sent to your mail</p>";
      }
      else
      {
        $fgt_pwd_message = "<p>Something went wrong</p>";
      }
    }
  }
  else
  {
    $fgt_pwd_message = "<p>This email is not linked to any account</p>";
  }
}
// ------------------------------data fetch--------------------------

include "include/account_header.php";
include "html/forgot_password.php";
include "include/account_footer.php";
 ?>
