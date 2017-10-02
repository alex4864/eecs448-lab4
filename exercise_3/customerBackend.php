<?php
$username = $_POST["username"];
$password = $_POST["password"];
$toasters = $_POST["toasters"];
$swissArmyToasters = $_POST["swiss-army-toasters"];
$nuclearPoweredToasters = $_POST["nuclear-powered-toasters"];
$shippingType = $_POST["shipping-type"];

$toasterSub = $toasters * 25;
$swissSub = $swissArmyToasters * 180;
$nuclearSub = $nuclearPoweredToasters * 60000000;

$shippingSub = 0;
if($shippingType == "overnight"){
  $shippingSub = 50;
}
if($shippingType == "3-day"){
  $shippingSub = 5;
}

$total = $toasterSub + $swissSub + $nuclearSub + $shippingSub;

echo "Welcome " . $username . "<br>";
echo "Password: " . $password . "<br><br>";

echo "<table>";
echo "<tr>";
echo "<th>Item</th>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "<th>Subtotal</th>";
echo "</tr>";

echo "<tr>";
echo "<td>Toaster</td>";
echo "<td>" . $toasters . "</td>";
echo "<td>$25</td>";
echo "<td>" . $toasterSub . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Swiss Army Toaster</td>";
echo "<td>" . $swissArmyToasters . "</td>";
echo "<td>$180</td>";
echo "<td>" . $swissSub . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Nuclear Powered Toaster</td>";
echo "<td>" . $nuclearPoweredToasters . "</td>";
echo "<td>$60000000</td>";
echo "<td>" . $nuclearSub . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Shipping</td>";
echo "<td>" . $shippingType . "</td>";
echo "<td></td>";
echo "<td>" . $shippingSub . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Total</td>";
echo "<td></td>";
echo "<td></td>";
echo "<td>" . $total . "</td>";
echo "</tr>";
echo "</table>"
?>
