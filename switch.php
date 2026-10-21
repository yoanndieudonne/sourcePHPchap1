<html>
<body>
<?php
$jour = "samedi";

switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":
        echo "$jour est un jour ouvré.<br>";
        break;
    case "samedi":
    case "dimanche":
        echo "$jour est un jour de week-end !<br>";
        break;
    default:
        echo "Jour inconnu.<br>";
        break;
}

// Exemple avec un "fall-through" (absence de break)
$note = 12;
switch (true) {
    case ($note >= 16):
        echo "Très bien<br>";
    case ($note >= 12): // Pas de break ici : va exécuter les suivants !
        echo "Bien<br>";
    case ($note >= 10):
        echo "Passable<br>";
        break;
    default:
        echo "Insuffisant<br>";
}
?>
</body>
</html>
