<html>
<body>
<?php
$a = 3;
echo "valeur : $a, type : ";
echo gettype($a);  // integer
echo "<br>";

$a = 3.3;
echo "valeur : $a, type : ";
echo gettype($a);  // double (synonyme de float en PHP)
echo "<br>";

$a = "3a";
echo "valeur : $a, type : ";
echo gettype($a);  // string
echo "<br>";

$a = TRUE;
echo "valeur : $a, type : ";
echo gettype($a);  // boolean
echo "<br>";

// $b n'est pas initialisée
echo "sans valeur, type : ";
echo gettype($b);  // NULL
echo "<br>";
?>
</body>
</html>
