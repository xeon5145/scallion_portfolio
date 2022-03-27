<?php

// logout button visiblity and auto login is cookie is set--------------
if(isset($_COOKIE['username']))
{
  // echo $_COOKIE['username'];
  $logout_btn = "
                <form id='logout_form' method='post'>
                <input type='submit' name='logout' value='Logout'>
                </form>
                ";              
}
else
{
  $logout_btn = "";
}
// logout button visiblity and auto login is cookie is set--------------

//logout button query-----------
if(isset($_POST['logout']))
{
header('location: index.php');
unset($_COOKIE['username']);
setcookie('username', null, -1, '/');
}
//logout button query-----------
include "html/header.php";
?>
