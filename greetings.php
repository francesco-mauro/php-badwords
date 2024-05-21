<?php
// GET
// var_dump($_GET);
// var_dump(empty($_GET["badword"]));

if (empty($_GET['paragraph']) || empty($_GET['badword'])) {
    echo "Errore, dati mancanti";
    die();
}

$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

// paragrafo originale
echo "<h3>Paragrafo originale:</h3>";
echo "<p>$paragraph</p>";
echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";

// parola con ***
$censored_paragraph = str_ireplace($badword, '***', $paragraph);

// Stampa coon censura
echo "<h3>Paragrafo censurato:</h3>";
echo "<p>$censored_paragraph</p>";
echo "<p>Lunghezza: " . strlen($censored_paragraph) . " caratteri</p>";
