<?php

$m = 4;
$n = 6;
$arr = [];
for ($i=0; $i <$m ; $i++) {
  $arr[$i] = [];
  for ($j=0; $j <$n ; $j++) {
    $arr[$i][$j ] = 1;
  }
}
echo "<table>";
for ($p=0; $p <$m ; $p++) {
  echo "<tr>";
  for ($k=0; $k <$n ; $k++) {
    echo "<td>";
    echo $arr[$p][$k];
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>" ;
