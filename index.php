<?php
include "include/back_imp.php";
// error_reporting(0);
session_start();
// empty message variables-------------------------------------------
$login_status = "";
// empty message variables-------------------------------------------
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  // ----------------------encrypting password--------------------------------------
  $enc_pwd = crypt($password,'$5$rounds=5000$heyladiesdropitdown$');
  // ----------------------encrypting password--------------------------------------

$creds = "SELECT username,firstname,email,password FROM user_accounts WHERE username = '$username' OR email = '$username'";
$cred_id = $op_conn->query($creds);
if($cred_id->num_rows > 0)
{
 while($cred_ow = $cred_id->fetch_assoc())
 {
   $pwd = $cred_ow['password'];
   if($enc_pwd == $pwd)
   {
     header('Location: dashboard.php');
     $_SESSION['username'] = $cred_ow['firstname'];
   }
   else
   {
     $login_status = "Wrong password";
   }
 }
}
else
{
  $login_status = "No account is linked to this username/Email";
}
}
include "include/main_header.php";
include "html/index.php";
include "include/main_footer.php";
 ?>
