<?php
include "include/back_imp.php";
//fetching username---------------------------

//fetching username---------------------------
//submitting added crypto---------------------
if(isset($_POST['atw']))
{
  $crypto = $_POST['crp_name'];
  $buy_price = $_POST['b_price'];
  $quantity = $_POST['quantity'];
  $created_at = date('Y-m-d G:i:s');

  echo $add_crypto = "INSERT INTO crypto_list (code, b_price, quantity, created_at)
                              VALUES  (
                                        '$crypto',
                                        '$buy_price',
                                        '$quantity',
                                        '$created_at'
                                      )";

    if(mysqli_query($op_conn,$add_crypto))
    {
      $add_crytpo_not = "Crypto added to watchlist sucessfully";
    }
    else
    {
      $add_crytpo_not = "Something went wrong";
    }
}
//submitting added crypto---------------------
// fetching cryptos to table------------------
$fetch_c_list = "SELECT * FROM crypto_list ";
$run_fetch_c_list = $op_conn->query($fetch_c_list);
// fetching cryptos to table------------------
// need to the a unique id number to identify which crppto belong to whom.
include "include/account_header.php";
include "html/dashboard.php";
include "include/account_footer.php";
 ?>                                                                                                                                                                                                                                                                                                                                              
