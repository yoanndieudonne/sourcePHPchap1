<html>
<body>
<?php
$ch = "  une ligne pour chercher  ";

echo "strlen : "       . strlen($ch)              . "<br>";
echo "trim   : ["       . trim($ch) . "]<br>";
echo "strtoupper : "   . strtoupper("aBCd")       . "<br>";
echo "strtolower : "   . strtolower("aBCd")       . "<br>";
echo "strpos : "       . strpos("une ligne pour chercher", "ne")      . "<br>";
echo "strpos offset : ". strpos("une ligne pour chercher", "ne", 2)   . "<br>";
echo "strcmp : "       . strcmp("abcd", "aac")    . "<br>";
echo "substr : "       . substr("une ligne pour chercher", 4, 5)      . "<br>";
echo "strrev : "       . strrev("abcd")           . "<br>";
echo "str_replace : "  . str_replace("ne", "NE", "une ligne pour chercher") . "<br>";

$tab = explode(";", "a;b;c");
echo "explode : ";
print_r($tab);
echo "<br>";

echo "implode : " . implode("-", array("a","b","c")) . "<br>";
echo "chr : "     . chr(0x65)      . "<br>";
echo "ord : "     . ord("e")       . "<br>";
echo "sprintf : " . sprintf("\$x = %01.1f", 3.42) . "<br>";
echo "nl2br : "   . nl2br("ligne1\nligne2") . "<br>";
echo "addslashes : " . addslashes("l'apostrophe") . "<br>";
?>
</body>
</html>
