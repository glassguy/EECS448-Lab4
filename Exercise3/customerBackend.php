<?php
echo "<div>";
echo "<link rel='stylesheet' href='style.css'>";
$trubbish = $_POST["trubNum"];
$pikachu = $_POST["pikaNum"];
$charizard = $_POST["charNum"];
$ship = $_POST["shipping"];
$username = $_POST["user"];
$password = $_POST["pass"];

$trubCost = $trubbish * 1;
$pikaCost = $pikachu * 5;
$charCost = $charizard * 20;

if($ship == "sevenday") {
  $shipName = "Seven Day";
  $shipCost = 0;
}
elseif($ship == "threeday") {
  $shipName = "Three Day";
  $shipCost = 5;
}
else {
  $shipName = "Overnight";
  $shipCost = 50;
}

$total = $trubCost + $pikaCost + $charCost + $shipCost;

echo "<center>";
echo "<h3> Here's Your Receipt!</h3>";
echo "Username: $username <br>";
echo "Password: $password <br><br>";
echo "<table id = 'receipt'>";
echo "<tr><th>   </th><th>Quanity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
echo "<tr><td id = 'pokemon'>Trubbish</td><td>$trubbish</td><td>$1</td><td>$$trubCost</td></tr>";
echo "<tr><td id = 'pokemon'>Pikachu</td><td>$pikachu</td><td>$5</td><td>$$pikaCost</td></tr>";
echo "<tr><td id = 'pokemon'>Charizard</td><td>$charizard</td><td>$20</td><td>$$charCost</td></tr>";
echo "<tr><td id = 'pokemon'>Shipping</td><td colspan = '2'>$shipName</td><td>$$shipCost</td></tr>";
echo "<tr><td id = 'pokemon' colspan = '3'>Total Cost</td><td id = 'pokemon'>$$total</td></tr>";
echo "</table>";
echo "</center>";
echo "</div>";
?>
