<?php
echo "Kuupäev ja kellaaeg: " . date("d.m.Y H:i") . "\n\n";

$sundimiseKuupaev = "1990-03-25";
$sundimiseAasta = new DateTime($sundimiseKuupaev);
$praegu = new DateTime();
$vanus = $sundimiseAasta->diff($praegu);
$vanus_aasta = $vanus->y;
echo "Kasutaja vanus sel aastal: $vanus_aasta aastat\n\n";

$kooliaastaLopp = new DateTime(date("Y") . "-05-31");
$paevadKooliaastaLoppuni = $praegu->diff($kooliaastaLopp);
$paevadKooliaastaLoppuni = $paevadKooliaastaLoppuni->days;
echo "Kooliaasta lõpuni on jäänud: $paevadKooliaastaLoppuni päeva\n\n";

$kuu = date("m");

if ($kuu >= 3 && $kuu <= 5) {
    echo "Aastaaja pilt: Kevad\n\n";
} elseif ($kuu >= 6 && $kuu <= 8) {
    echo "Aastaaja pilt: Suvi\n\n";
} elseif ($kuu >= 9 && $kuu <= 11) {
    echo "Aastaaja pilt: Sügis\n\n";
} else {
    echo "Aastaaja pilt: Talv\n\n";
}
?>
