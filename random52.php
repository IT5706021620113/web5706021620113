<html>
<head><title>โปรแกรมrandom</title>
  <meta charset="utf-8">
</head>
<body>
  <?php
// random
  for ($i=0; $i < 52 ; $i++) {
    $number[$i] = rand(1,52);
  }

// check
  for($i=0; $i < 52; $i++){
    for($j=0; $j < $i; $j++){
      if($number[$i] == $number[$j]){
        $number[$i] = rand(1,52);
        $j=-1; // Reset Check
      }
    }
  }


$count = 0;
echo "<table border = 1 cellpadding = 10 align = center>";
  for ($i=0; $i < 13 ; $i++) {
    echo "<tr>";
    for ($j=0; $j < 4 ; $j++) {
      echo "<td align = center>" . $number[$count] . "</td>";
      $count++;
    }
    echo "</tr>";
  }
echo "</table>";
   ?>
</body>
</html>
