<?php
session_start();
$_SESSION['username'] = "";

if(isset($_POST['logout']))
{
header('location: index.php');
unset($_SESSION['username']);
}
include "html/header.php";
?>
