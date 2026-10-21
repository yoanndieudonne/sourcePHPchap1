<html>
<body>
<?php
echo "abs(-4.2)        = " . abs(-4.2)        . "<br>";
echo "ceil(4.2)        = " . ceil(4.2)        . "<br>";
echo "floor(4.2)       = " . floor(4.2)       . "<br>";
echo "round(4.2)       = " . round(4.2)       . "<br>";
echo "round(4.8)       = " . round(4.8)       . "<br>";
echo "round(pi, 3)     = " . round(M_PI, 3)   . "<br>";

echo "sqrt(4.2)        = " . sqrt(4.2)        . "<br>";
echo "exp(2)           = " . exp(2)           . "<br>";
echo "log(exp(2))      = " . log(exp(2))      . "<br>";

echo "max(4.2, 5)      = " . max(4.2, 5)      . "<br>";
echo "min(4.2, 5)      = " . min(4.2, 5)      . "<br>";
echo "max([3, 7, 2])   = " . max([3, 7, 2])   . "<br>";

// Valeur aleatoire (change a chaque execution)
echo "mt_rand(2, 35)   = " . mt_rand(2, 35)   . "<br>";
?>
</body>
</html>
