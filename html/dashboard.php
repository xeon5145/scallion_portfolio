<!--
part 1 starts
part - 1 is about the card
which contains the for which takes the inputs of the crypto that is in hold position
part 1 ends
-->
<div class="intro-card">
  <!-- welcome card -->
  <p>Hi , Abhishek</p>
  <p>Total Profit / Loss : </p>
  <p>Owned Cryptos : </p>
</div>

<div class="form-card">
  <!-- add watchlist form card -->
  <p>Add new crypto to watchlist</p>
  <div class="">
    <form class="" method="post">
      <div class="form-card-dropdown">
      <label for="">Choose a crypto : </label>
      <select class="" name="crp_name" required>
        <option value="" selected>Choose a crypto</option>
        <option value="BTC" >Bitcoin</option>
      </select>
    </div>
    <div class="form-card-input">
      <label for="">Enter Buy Price : </label>
      <input type="text" name="b_price" placeholder="Enter Price" required pattern="[0-9.]+">
    </div>
    <div class="form-card-input">
      <label for="">Enter Quantity : </label>
      <input type="text" name="quantity" placeholder="Enter Quantity" required pattern="[0-9.]+">
    </div>
    <div class="form-card-add">
      <input class="form-card-add-button" type="submit" name="atw" value="Add To Watchlist">
    </div>
    </form>
    <?php
    echo @$add_crytpo_not;
     ?>
  </div>
</div>

<div class="">
  <!-- watchlist table card -->
  <table border="collapse">
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
          <td>BP</td>
          <td><?php echo $fetch_data['b_price']; ?></td>
          <td><?php echo $fetch_data['quantity']; ?></td>
          <td>T/P</td>
        </tr>
          <?php
        }
      }
       ?>
    </tbody>
    <tr>
      <td colspan="4">Total Profit / Loss</td>
      <td>2,347</td>
    </tr>
  </table>
</div>
