<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $self_php = $_POST["self_php"];
    $php_referenz = $_POST["php_referenz"];
    $php_kochbuch = $_POST["php_kochbuch"];
    $ausgewaehlteOption = $_POST["aufmerksamkeit"];
    
    echo "<p>Ihre Bestellung:</p>";
    echo "<ul>";

    $preis_self_php = $self_php * 25.4 * 1.05;
    $gewicht_self_php = $self_php * 800;
    echo "<li>Self-PHP: $preis_self_php € ($gewicht_self_php g)</li>";

    $preis_php_referenz = $php_referenz * 18 * 1.05;
    $gewicht_php_referenz = $php_referenz * 600;
    echo "<li>PHP-Referenz: $preis_php_referenz € ($gewicht_php_referenz g)</li>";

    $preis_php_kochbuch = $php_kochbuch * 39 * 1.05;
    $gewicht_php_kochbuch = $php_kochbuch * 1300;
    echo "<li>PHP-Kochbuch: $preis_php_kochbuch € ($gewicht_php_kochbuch g)</li>";

    $Kosten = $preis_self_php + $preis_php_referenz +  $preis_php_kochbuch;
    
    if ($Kosten > 100) {
        $Kosten_End = $Kosten;
    }
        
    else {
        $Kosten_End = $Kosten + 20;
    }
       

    echo "</ul>";

    echo "<p>Angabe, wie Sie auf diese Seite aufmerksam wurden: $ausgewaehlteOption</p>";

    echo "<p>Gesamtpreis + Versand wird  $Kosten_End €</p>";
}
?>
