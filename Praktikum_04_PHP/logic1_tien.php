<!DOCTYPE html>
<html>
<head>
    <style>
        .even {
            background-color: #f2f2f2;
        }

        .odd {
            background-color: #fff;
        }
    </style>
</head>
<body>


<?php
// Setzen Sie die Anzahl der Zeilen
$rowNumber = 10;

// Funktion zur Erstellung der Tabelle
function createTable($anzahlZeilen) {
    for ($i = 1; $i <= $anzahlZeilen; $i++) {
        $class = ($i % 2 == 0) ? 'even' : 'odd'; // Wechselnde Klassen für Hintergrundfarben
        echo "<tr class='$class'>";
        echo "<td>[Nr$i]</td>";
        echo "<td>[Produkt$i]</td>";
        echo "</tr>";
    }
}

echo "<table border='1'>";
echo "<tr><th>Zeilennr.</th><th>Text</th></tr>";

// Aufruf der Funktion, um die Tabelle zu erstellen
createTable($rowNumber);

echo "</table>";
?>

</body>
</html>