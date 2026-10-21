<html>
<body>
<?php
// Variable jamais declaree
echo "Si la variable est non declaree :<br>";
echo "  isset : "; var_dump(isset($b));
echo "  empty : "; var_dump(empty($b));
echo "<br>";

// Variable explicitement NULL
$b = NULL;
echo "Si la variable est NULL :<br>";
echo "  isset : "; var_dump(isset($b));
echo "  empty : "; var_dump(empty($b));
// Echo direct : TRUE devient "1", FALSE devient ""
echo "  echo direct isset : [" . isset($b) . "]<br>";
echo "  echo direct empty : [" . empty($b) . "]<br>";
echo "<br>";

// Variable avec une valeur "pleine"
$b = 13;
echo "Si la variable vaut 13 :<br>";
echo "  isset : "; var_dump(isset($b));
echo "  empty : "; var_dump(empty($b));
// Echo direct
echo "  echo direct isset : [" . isset($b) . "]<br>";
echo "  echo direct empty : [" . empty($b) . "]<br>";
echo "<br>";

// Variable avec une valeur "falsy"
$b = 0;
echo "Si la variable vaut 0 :<br>";
echo "  isset : "; var_dump(isset($b));
echo "  empty : "; var_dump(empty($b));
echo "<br>";

$b = "";
echo "Si la variable vaut \"\" (chaine vide) :<br>";
echo "  isset : "; var_dump(isset($b));
echo "  empty : "; var_dump(empty($b));
echo "<br>";

// Destruction de la variable
unset($b);
echo "Apres unset(\$b) :<br>";
echo "  isset : "; var_dump(isset($b));
echo "  empty : "; var_dump(empty($b));
echo "<br>";

// var_dump affiche aussi le type et la valeur
$b = 3.1;
$c = true;
echo "var_dump de \$b et \$c :<br>";
var_dump($b, $c);
?>
</body>
</html>
