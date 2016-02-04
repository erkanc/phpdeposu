//Php sayı yuvarlama fonksiyonları olan floor,ceil ve round
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Php Denemeleri 2</title>
</head>
<body>
  <?php
  $s1=Array(1.1,2.73,3.55,3.49);
  for($i=0;$i<4;$i++)
  {
    $s2[$i]=floor($s1[$i]);
    $s3[$i]=ceil($s1[$i]);
    $s4[$i]=round($s1[$i]);
  }
 function Yazdir($dizi)
  {
    for ($i=0; $i <4 ; $i++)
    {
      echo "$dizi[$i]   ";
    }
    echo "<br>";
  }
  echo "Sayıların normal hali: ";
  Yazdir($s1);
  echo "Floor ile yuvarlanmış hali: ";
  Yazdir($s2);
  echo "Ceil ile yuvarlanmış hali: ";
  Yazdir($s3);
  echo "Round ile yuvarlanmış hali: ";
  Yazdir($s4);
 ?>
</body>
</html>
