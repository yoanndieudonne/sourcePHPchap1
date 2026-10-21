<html>
<body>
<?php
$a = 5;
$b = "5";

// Utilisation de l'operateur ternaire pour afficher clairement TRUE ou FALSE
echo "a == b  : " . ($a == $b ? "TRUE" : "FALSE") . "<br>";   // TRUE
echo "a === b : " . ($a === $b ? "TRUE" : "FALSE") . "<br>";  // FALSE
echo "a != b  : " . ($a != $b ? "TRUE" : "FALSE") . "<br>";   // FALSE
echo "a !== b : " . ($a !== $b ? "TRUE" : "FALSE") . "<br>";  // TRUE

// Piege classique avec les booleens
echo "0 == false  : " . (0 == false ? "TRUE" : "FALSE") . "<br>";   // TRUE
echo "0 === false : " . (0 === false ? "TRUE" : "FALSE") . "<br>";  // FALSE
?>
</body>
</html>
