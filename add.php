<?php
$ads = ["add1.png", "add2.jpg", "add3.png", "add4.jpg", "add5.png"]; // Pole s názvy obrázků reklam
$randomAd = $ads[array_rand($ads)]; // Vybere náhodný obrázek

$adPath = 'ads/' . $randomAd; // Cesta k obrázku

// Ladicí informace (odstraňte pro produkční prostředí)
if (!file_exists($adPath)) {
    echo "Obrázek neexistuje: " . $adPath;
} else {
    echo '<div class="ad-container">';
    echo '<a href="http://www.example.com"><img src="' . $adPath . '" alt="Advertisement"></a>';
    echo '</div>';
}
?>