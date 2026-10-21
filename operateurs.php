<html>
<body>
<?php
$i = 2;
$j = 6;

echo "i = $i, j = $j<br>";

// Operations de base
echo "$i * $j + 1 = "  . ($i * $j + 1)  . "<br>";   // 13
echo "$j / $i = "      . ($j / $i)      . "<br>";   // 3 (int)
echo "($j + 1) / $i = ". (($j + 1) / $i). "<br>";   // 3.5 (float)
echo "$j % $i = "      . ($j % $i)      . "<br>";   // 0
echo "($j + 1) % $i = ". (($j + 1) % $i). "<br>";   // 1
echo "2 ** 3 ** 2 = "  . (2 ** 3 ** 2)  . "<br>";   // 512

// Melange int / float
$x = 2.0; $y = 6.0;
echo "x = $x, y = $y<br>";
echo "x / y = "        . ($x / $y)      . "<br>";   // 0.3333333333333
echo "y + i - x / 3 + (2 + j) % x / y = "
     . ($y + $i - $x / 3 + (2 + $j) % $x / $y) . "<br>";

// Incrementation
$a = 2;
echo "a++ * 6 + 1 = " . ($a++ * 6 + 1) . "<br>";   // 13 (a vaut 2, puis devient 3)
echo "a vaut maintenant $a<br>";                    // 3

// Affectation composee
$b = 6;
$b += $a;
echo "b = $b<br>";                                  // 9

?>
</body>
</html>
