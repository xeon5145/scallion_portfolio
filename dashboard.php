<?php
include "include/back_imp.php";
error_reporting(0);
// fetching cryptos to table------------------
$fetch_c_list = "SELECT code,AVG(b_price) as b_price,AVG(quantity) as quantity FROM crypto_list GROUP BY code";
$run_fetch_c_list = $op_conn->query($fetch_c_list);
// fetching cryptos to table------------------
// need to the a unique id number to identify which crppto belong to whom.
include "include/header.php";
include "html/dashboard.php";
// include "include/footer.php";
 ?>                                                                                                                                                                                                                                                                                                                                              
