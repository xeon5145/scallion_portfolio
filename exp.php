<!-- php code -->
<?php
 ?>
 <!-- php code -->
 <!-- ------------------------------------------------------------------------------------------------ -->
 <!-- Html Code -->
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body>
<h2>Experiment code for Coin cap API</h2>
<h3>Your key: 65be5717-2ab6-47cc-a21a-aa2fc4195907<br/>
Expires on 1/30/2033</h3>
<table border="collapsed">
  <thead>
  <tr>
    <th>Name</th>
    <th>Price</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td id="name"></td>
    <td id="price"></td>
  </tr>
</tbody>
</table>
  </body>
</html>
<!-- Html Code -->
<!-- ------------------------------------------------------------------------------------------------ -->
<!-- Js code -->
<script type="text/javascript">

// const pricesWs = new WebSocket('wss://ws.coincap.io/prices?assets=bitcoin,ethereum')

async function getData()
{
  const resp = await fetch('https://api.coincap.io/v2/assets/');
  const result = await resp.json();
  // result
  // console.log(result);
  for (var i = 0; i < result.data.length; i++)
   {
     document.querySelector(".crp_name").innerHTML += `
     <option value=`${result.data[i].name}` >${result.data[i].name}</option>
     `;
  }
  return result.data.map(value => value.id);
}
// pricesWs.onmessage = function (msg)
// {
  // console.log(msg);
// const price = JSON.parse(msg.data);
// console.log(price);
// const crName = Object.keys(price)[0];
// console.log(price,crName,price[crName]);

// }

// getData();
getData();
// console.log(names);
// console.log(count);
// for (var i = 0; i < array.length; i++) {
//   array[i]
// }
</script>
<!-- Js code -->
