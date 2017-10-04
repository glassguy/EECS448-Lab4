<?php
function mult($r, $c) {
    $x = $r * $c;
    return $x;
}

$size = 100;

echo "<table style='width:100%; font-size:xx-small'>";
echo "<tr><td>   </td>";
for($j = 1; $j <= $size; $j++) {
  echo "<td> $j </td>";
}
echo "</tr>";

for($i = 1; $i <= $size; $i++) {
    echo "<tr><td> $i </td>";
    for($j = 1; $j <= $size; $j++) {
      if($i - 1 == 0) {
        echo "<td> $j </td>";
      }
      elseif($j - 1 == 0) {
        echo "<td> $i </td>";
      }
      else {
        echo "<td> " . mult($i, $j) . " </td>";
      }
    }
    echo "</tr>";
}

echo "</table>"
?>
