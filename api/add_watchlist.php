<?php
include "../required/include/connection.php";
//submitting added crypto---------------------
  $crypto = $_POST['crp_name'];
  $buy_price = $_POST['b_price'];
  $quantity = $_POST['quantity'];
  $created_at = date('Y-m-d G:i:s');

  $add_crypto = "INSERT INTO crypto_list (code, b_price, quantity, created_at)
                              VALUES  (
                                        '$crypto',
                                        '$buy_price',
                                        '$quantity',
                                        '$created_at'
                                      )";

    if(mysqli_query($op_conn,$add_crypto))
    {
      echo "Crypto added to watchlist sucessfully";
    }
    else
    {
      echo "Something went wrong";
    }
//submitting added crypto---------------------

 ?>
