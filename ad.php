<?php
$ads = ["add1.png", "add2.jpg", "add3.png", "add4.jpg", "add5.png", "add6.jpg", "add7.jpg", "add8.jpg", "add9.jpg", "add10.jpg", "add11.jpg"];
$randomAd = $ads[array_rand($ads)];

$adPath = 'ads/' . $randomAd;

if (!file_exists($adPath)) {
    echo "Obrázek neexistuje: " . $adPath;
} else {
    echo '<div class="ad-container">';
    echo '<a href="http://www.example.com"><img src="' . $adPath . '" alt="Advertisement"></a>';
    echo '</div>';
}
?>