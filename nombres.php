<html>
<body>
<?php
// Entiers dans differentes bases
$a = 123;      // decimal
$b = 0123;     // octal  -> 83
$c = 0x1A;     // hexa   -> 26
$d = 0b1010;   // binaire -> 10

echo "a = $a <br>";
echo "b = $b <br>";
echo "c = $c <br>";
echo "d = $d <br>";

// Flottants
$e = 12.3;
$f = 0.123E2;
$g = -123e-1;

echo "e = $e <br>";
echo "f = $f <br>";
echo "g = $g <br>";

// Types
echo "type de a : ";
echo gettype($a);
echo "<br>";

echo "type de e : ";
echo gettype($e);
echo "<br>";

// Conversions implicites : chaine numerique
$somme = 3 + 2.5;
echo "3 + 2.5 = $somme <br>";

$chaine = "10";
$resultat = 2 + $chaine;
echo "2 + \"10\" = $resultat <br>";

$chaine2 = "10.3";
$resultat2 = 2 + $chaine2;
echo "2 + \"10.3\" = $resultat2 <br>";

// Chaine debutant numeriquement : warning mais la partie numerique est utilisee
$chaine3 = "10abc";
$resultat3 = 2 + $chaine3;
echo "2 + \"10abc\" = $resultat3 <br>";

$chaine4 = "10.3abc";
$resultat4 = 2 + $chaine4;
echo "2 + \"10.3abc\" = $resultat4 <br>";

// Chaine non numerique : TypeError fatale (non execute ici)
// $resultat5 = 2 + "abc";
echo "2 + \"abc\" provoque une TypeError (non execute ici)<br>";
?>
</body>
</html>
