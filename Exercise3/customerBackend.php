<?php
  if (!isset($_POST)) {
    header("Location: customerFrontend.html");
  }
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cokeNum = $_POST['cokeNum'];
  $cokeCost = ($cokeNum * 1);
  $drpepperNum = $_POST['drpepperNum'];
  $drpepperCost = ($drpepperNum * 1.5);
  $mexicanCokeNum = $_POST['mexicanCokeNum'];
  $mexicanCokeCost = ($mexicanCokeNum * 5);
  $shipping = $_POST['shipping'];
  $total = 0;
?>
<html>
  <head>
    <title>Order Details</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>Welcome <?php echo $username ?>!</h1>
    <p>Thank you for your purchase. Your password is: "<?php echo $password ?>". Here is your reciept:</p>
    <table id='receipt'>
      <tr>
        <th>Item</th>
        <th>Cost</th>
        <th>Quantity</th>
        <th>Item Total</th>
      </tr>
      <tr>
        <th>Coke</th>
        <td>$1.00</td>
        <td><?php echo $cokeNum ?></td>
        <td>$<?php echo $cokeCost ?></td>
      </tr>
      <tr>
        <th>Dr. Pepper</th>
        <td>$1.50</td>
        <td><?php echo $drpepperNum ?></td>
        <td>$<?php echo $drpepperCost ?></td>
      </tr>
      <tr>
        <th>Real Sugar (Mexican) Coke</th>
        <td>$5.00</td>
        <td><?php echo $mexicanCokeNum ?></td>
        <td>$<?php echo $mexicanCokeCost ?></td>
      </tr>
      <tr>
        <th colspan="2">Shipping</th>
        <td><?php
          if ($shipping == "free") {
            $shippingCost = 0;
            echo "7 Day";
          } elseif ($shipping == "3day") {
            $shippingCost = 5;
            echo "3 Day";
          } elseif ($shipping == "overnight") {
            $shippingCost = 50;
            echo "Overnight";
          }
        ?></td>
        <td>$<?php echo $shippingCost ?></td>
      </tr>
      <tr>
        <th colspan="3">Total</th>
        <td>$<?php echo ($shippingCost + $mexicanCokeCost + $drpepperCost + $cokeCost) ?>
      </tr>
    </table>
  </body>
</html>
