<!--
part 1 starts
part - 1 is about the card
which contains the for which takes the inputs of the crypto that is in hold position
part 1 ends
-->
<div class="">
  <!-- welcome card -->
  <p>Hi , Abhishek</p>
  <p>Total Profit / Loss : </p>
  <p>Owned Cryptos : </p>
</div>

<div class="">
  <!-- add watchlist form card -->
  <p>register crypto</p>
  <div class="">
    <form class="" method="post">
      <div class="">

      <label for="">Choose a crypto : </label>
      <select class="" name="crp_name">
        <option value="" selected>Chosse a crypto</option>
      </select>
    </div>
    <div class="">
      <label for="">Enter Buy Price</label>
      <input type="text" name="b_price" placeholder="Enter Price" required pattern="[0-9.]+">
    </div>
    <div class="">
      <label for="">Enter Quantity : </label>
      <input type="text" name="quantity" placeholder="Enter Quantity" required pattern="[0-9.]+">
    </div>
    <div class="">
      <input type="submit" name="atw" value="Add To Watchlist">
    </div>
    </form>
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
      <tr>
        <td>Solana</td>
        <td>7,568</td>
        <td>10,789</td>
        <td>10</td>
        <td>3,891</td>
      </tr>
    </tbody>
    <tr>
      <td colspan="4">Total Profit / Loss</td>
      <td>2,347</td>
    </tr>
  </table>
</div>
