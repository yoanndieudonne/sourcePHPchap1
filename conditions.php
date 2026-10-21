<html>
<body>
<?php
// Generation d'un nombre aleatoire entre 0 et 10
$a = mt_rand(0, 10);

// Structure if / elseif / else
if ($a % 2 == 0) {
    echo "$a est pair.<br>";
} elseif ($a % 3 == 0) {
    echo "$a est impair mais divisible par 3.<br>";
} else {
    echo "$a est impair et non divisible par 3.<br>";
}

// Operateur logique ET (&&)
if ($a > 5 && $a < 8) {
    echo "$a est strictement compris entre 5 et 8.<br>";
}

// Operateur ternaire (if/else compresse)
$statut = ($a >= 5) ? "plus grand ou egal a 5" : "petit strictement inferieur a 5";
echo "Conclusion : $a est $statut.<br>";
?>
</body>
</html>
