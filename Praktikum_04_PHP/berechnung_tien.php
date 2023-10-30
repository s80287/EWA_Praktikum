<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $self_php = $_POST["self_php"];
    $php_referenz = $_POST["php_referenz"];
    $php_kochbuch = $_POST["php_kochbuch"];
    //$ausgewaehlteOption = $_POST["aufmerksamkeit"];

    echo "<p>Self_php: " . $self_php . "</p>";


    echo "<p>Ihre Bestellung:</p>";
    echo "<ul>";

    $preis_self_php = $self_php * 25.4 * 1.05;
    $gewicht_self_php = $self_php * 0.8;
    echo "<li>Self-PHP: $preis_self_php € $gewicht_self_php kg </li>";

    $preis_php_referenz = $php_referenz * 18.0 * 1.05;
    $gewicht_php_referenz = $php_referenz * 0.6;
    echo "<li>Self-PHP: $preis_php_referenz € $gewicht_php_referenz kg </li>";

    $preis_php_kochbuch = $php_kochbuch * 39.0 * 1.05;
    $gewicht_php_kochbuch = $php_kochbuch * 1.3;
    echo "<li>Self-PHP: $preis_php_kochbuch € $gewicht_php_kochbuch kg </li>";

    $buchKosten = $preis_self_php + $preis_php_referenz + $preis_php_kochbuch;
    //$gesamteGewicht = $gewicht_self_php + $gewicht_php_referenz + $gewicht_php_kochbuch;
    // Versandkosten 10 kg = 10.49 €
    $versandKosten = 10.49;


    if ($buchKosten > 100) {
        $gesamteKosten = $buchKosten;
    }
    else {
        $gesamteKosten = $buchKosten + $versandKosten;
    }

    echo "</ul>";

    echo "<p>Gesamtpreis + Versand: $gesamteKosten €</p>";

}


?>