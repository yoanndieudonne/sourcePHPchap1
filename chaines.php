<html>
<body>
<?php
$a = "abc";

echo "entre guillemets : $a <br>";
echo 'entre quotes : $a', "<br>";

echo "combinaison de 'quotes' et de \"guillemets\"<br>";
echo 'autre combinaison de \'quotes\' et de "guillemets"', "<br>";

echo "le passage \n a la ligne doit etre ecrit en HTML !<br>";
echo "le backslash \\ lui-meme<br>";
echo "et le dollar \$<br>";

// Accolades pour delimiter le nom de la variable
$b = "X";
echo "sans accolades : $bc <br>";    // cherche $bc (indefini)
echo "avec accolades : {$b}c <br>";  // affiche Xc

// Concatenation
$prenom = "Jean";
$nom    = "Dupont";
echo "Bonjour " . $prenom . " " . $nom . " !<br>";
echo "Bonjour $prenom $nom !<br>";

$chaine = "a";
$chaine .= "b";         // equivaut a $chaine = $chaine . "b"
$chaine .= "c";
echo "chaine concaténée : $chaine<br>";

// Piege classique : + vs .
echo "3" + "5";   echo "<br>";   // affiche 8
echo "3" . "5";   echo "<br>";   // affiche 35 
echo (3+5)."5";   echo "<br>";   // affiche 85 
?>
</body>
</html>
