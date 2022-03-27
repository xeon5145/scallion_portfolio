<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/css/header.css">
  <link rel="stylesheet" href="dist/css/index.css">
  <link rel="stylesheet" href="dist/css/dashboard.css">
  <link rel="stylesheet" href="dist/css/footer.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body>
  <header>
    <div class="head_bar">
      <span>Scallian Portfolio</span>
      <form id="logout_form" method="post">
      <input type="submit" name="logout" value="Logout">
      </form>
    </div>
  </header>
<?php
  echo $_SESSION['username'];
 ?>

<script type="text/javascript">
  var username = '<?php echo $_SESSION['username']; ?>';
  if(username == "")
  {
    document.getElementById("logout_form").style.display = "none";
  }
  else
  {
    document.getElementById("logout_form").style.display = "";
  }
</script>
