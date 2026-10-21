<html>
<body>
<?php
// Transtypage numerique
$f = 1.9;
$i = (int) $f;      // Troncature : 1 (et non 2)
echo "(int) 1.9 = $i<br>";

$s = "123.45";
$n = (int) $s;      // Conversion de chaine en int : 123
echo "(int) \"123.45\" = $n<br>";

$x = (float) "3.14"; // Conversion de chaine en float : 3.14
echo "(float) \"3.14\" = $x<br>";

// Addition avec transtypage explicite (cas classique des donnees de formulaire)
$chaine = "2.5";
$valeur = 1.5;
$somme = (float)$chaine + $valeur;
echo "(float) \"2.5\" + 1.5 = " . $somme . "<br>"; // Affiche 4
?>
</body>
</html>
