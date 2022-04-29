<div class="col">

<div class="col-1">

<div class="intro-card">
  <!-- welcome card -->
  <p>Hi , <?php echo $_COOKIE['username']; ?></p>
  <p>Total Profit / Loss : </p>
  <p>Owned Cryptos : </p>
</div>

<div class="form-card">
  <!-- add watchlist form card -->
  <p>Add new crypto to watchlist</p>
  <div class="">
    <form class="" id="add_watchlist_form" method="post">
      <div class="form-card-dropdown">
      <label for="">Choose a crypto : </label>
      <select class="crp_name" name="crp_name" id="crp_name">
        <option value="" selected>Choose a crypto</option>
        <!-- <option value="BTC" >Bitcoin</option> -->
      </select>
      <!-- <div id="crp_name">

      </div> -->
    </div>
    <div class="form-card-input">
      <label for="">Enter Buy Price : </label>
      <input type="text" name="b_price" placeholder="Enter Price" required pattern="[0-9.]+">
    </div>
    <div class="form-card-input">
      <label for="">Enter Quantity : </label>
      <input type="text" name="quantity" placeholder="Enter Quantity" required pattern="[0-9.]+">
    </div>
    <div class="" id="atw_noti">
      <p></p>
    </div>
    <div class="form-card-add">
      <input class="form-card-add-button" type="submit" name="atw" id="add_crypto" value="Add To Watchlist">
    </div>
    </form>
    <?php
    echo @$add_crytpo_not;
     ?>
  </div>
</div>
</div>
<!-- Table to be shown in diff row -->
<div class="col-2">
<div class="watchlist-card" id="watchlist_card">
  <!-- watchlist table card -->
  <table id="watchlist_table">
    <thead>
      <th>Name</th>
      <th>Current Price</th>
      <th>Buy Price</th>
      <th>Quantity</th>
      <th>Profit / Loss</th>
    </thead>
    <tbody>
      <?php
      if($run_fetch_c_list->num_rows > 0)
      {
        while($fetch_data = $run_fetch_c_list->fetch_assoc())
        {
          ?>
          <tr>
          <td><?php echo $fetch_data['code']; ?></td>
          <td>LP</td>
          <td><?php echo $fetch_data['b_price']; ?></td>
          <td><?php echo $fetch_data['quantity']; ?></td>
          <td id="profit_loss"></td>
            <script type="text/javascript">
            const live_price = 100000;
            const buy_price = "<?php echo $fetch_data['b_price']; ?>";
            const quantity = "<?php echo $fetch_data['quantity']; ?>";
            const pr_ls = (quantity*live_price) - (quantity*buy_price);
            document.getElementById("profit_loss").innerHTML = pr_ls.toFixed(2);
            </script>
        </tr>
          <?php
        }
      }
       ?>
    </tbody>
    <tr>
      <td colspan="4">Total Profit / Loss</td>
      <td id="total"></td>
    </tr>
  </table>
</div>
</div>
</div>

<script type="text/javascript">
async function getData()
{
  const resp = await fetch('https://api.coincap.io/v2/assets/');
  const result = await resp.json();
  // result
  console.log(result);
  for (var i = 0; i < result.data.length; i++)
   {
     var select_div = document.getElementById("crp_name");
     var job_options = new Option(result.data[i].name,result.data[i].name);
     select_div.appendChild(job_options);
  }
  // return result.data.map(value => value.id);
}
getData();
$(document).ready(function(e){
  $("#add_watchlist_form").on('submit',(function(e){
    e.preventDefault();
    $.ajax({
      url: "api/add_watchlist.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data)
      {
        $("#atw_noti").html(data);
        $("#add_watchlist_form")[0].reset();
        $( "#watchlist_card" ).load( "dashboard.php #watchlist_card" );
      },
      error: function()
      {
      }
    });
  }));
});

// total profit or loss calculation-------------
var table = document.getElementById("watchlist_table"), total_pl = 0, cl = 4;

for(var i = 0; table.rows.length; i++)
{
  total_pl = total_pl + parseInt(table.rows[i].cells[cl].innerHTML);
}
document.getElementById("total").innerHTML = total_pl;
// console.log(table.rows[1].cells[4].innerHTML);

// total profit or loss calculation-------------
// async function getData()
// {
//   const resp = await fetch('https://api.coincap.io/v2/assets/');
//   const result = await resp.json();
//   // result
//   console.log(result);
//   for (var i = 0; i < result.data.length; i++)
//    {
//      document.getElementById(".crp_name").innerHTML += `
//      <div >${result.data[i].name}</div>
//      `;
//   }
  // return result.data.map(value => value.id);
// }
// getData();
</script>
