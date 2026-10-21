<html>
<body>
<?php
// Insensibilite a la casse
$a = true;
$b = FALSE;

// Conversions implicites lors d'operations
echo "TRUE + 1 = " . ($a + 1) . "<br>";   // 1 + 1 = 2
echo "FALSE + 1 = " . ($b + 1) . "<br>"; // 0 + 1 = 1

// Conversions en chaine
echo "TRUE en chaine : [" . $a . "]<br>"; // [1]
echo "FALSE en chaine : [" . $b . "]<br>"; // []

// Conversion explicite (cast) pour verifier l'evaluation de valeurs atypiques
// On force le passage en bool, puis en int pour afficher 1 (TRUE) ou 0 (FALSE)
echo "L'entier -1 evalue en bool puis en int : " . (int)(bool)-1 . "<br>"; // 1 (donc TRUE)
echo "La chaine 'FALSE' evaluee en bool puis en int : " . (int)(bool)"FALSE" . "<br>"; // 1 (donc TRUE)
?>
</body>
</html>
