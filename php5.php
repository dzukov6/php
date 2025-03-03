<?php
$tydrukud = ["Anna", "Liisa", "Maris", "Kadri", "Kristi", "Eveli", "Helena", "Triin"];
sort($tydrukud);
echo "<h3>Tüdrukute nimed:</h3>";
foreach ($tydrukud as $nimi) {
    echo "$nimi<br>";
}

echo "<h3>Esimesed kolm nime:</h3>";
echo implode(", ", array_slice($tydrukud, 0, 3));

echo "<h3>Viimane nimi:</h3>";
echo end($tydrukud);

echo "<h3>Suvaline nimi:</h3>";
echo $tydrukud[array_rand($tydrukud)];

$autod = ["Subaru", "BMW", "Acura", "Mercedes-Benz", "Lexus", "Toyota", "Volkswagen", "GMC"];
$vin_koodid = ["1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "WAUGGAFC8CN433989"];

echo "<h3>Autode arv:</h3>" . count($autod);

echo "<h3>Kas massiivid on ühepikkused?</h3>" . (count($autod) == count($vin_koodid) ? "Jah" : "Ei");

$toyota_arv = count(array_filter($autod, fn($mark) => $mark == "Toyota"));
$audi_arv = count(array_filter($autod, fn($mark) => $mark == "Audi"));
echo "<h3>Toyotade arv:</h3> $toyota_arv";
echo "<h3>Audide arv:</h3> $audi_arv";

$lyhikesed_vin = array_filter($vin_koodid, fn($vin) => strlen($vin) < 17);
echo "<h3>Lühikesed VIN koodid:</h3>" . implode(", ", $lyhikesed_vin);

$palgad = [1220, 1213, 1295, 1312, 1298, 1354, 1296, 1286, 1292, 1327, 1369, 1455];
echo "<h3>2018. aasta keskmine palk:</h3>" . array_sum($palgad) / count($palgad);

$firmad = ["Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots", "Tagchat"];
sort($firmad);
echo "<h3>Firmad:</h3>" . implode(", ", $firmad);

$riigid = ["Indonesia", "Canada", "Kyrgyzstan", "Germany", "Philippines", "Democratic Republic of the Congo"];
usort($riigid, fn($a, $b) => strlen($b) - strlen($a));
echo "<h3>Kõige pikem riigi nimi:</h3> " . $riigid[0] . " (" . strlen($riigid[0]) . " tähemärki)";

$hiina_nimed = ["瀚聪", "月松", "雨萌", "展博", "雪丽", "哲恒", "慧妍", "博裕"];
sort($hiina_nimed);
echo "<h3>Esimene hiina nimi:</h3> " . $hiina_nimed[0];
echo "<h3>Viimane hiina nimi:</h3> " . end($hiina_nimed);

$google_nimed = ["Feake", "Bradwell", "Dreger", "Bloggett", "Lambole"];
$otsitav = "Dreger";
echo "<h3>Otsingutulemus:</h3>";
echo in_array($otsitav, $google_nimed) ? "<div class='alert alert-success'>$otsitav leitud!</div>" : "<div class='alert alert-danger'>$otsitav ei leitud!</div>";

$pildid = ["prentice.jpg", "freeland.jpg", "peterus.jpg", "devlin.jpg", "gabriel.jpg", "pete.jpg"];
echo "<h3>Kolmas pilt:</h3> <img src='C:/xampp/htdocs/img/{$pildid[2]}' alt='Pilt'>";
echo "<h3>Kõik pildid:</h3>";
foreach ($pildid as $pilt) {
    echo "<img src='C:/xampp/htdocs/img/$pilt' alt='Pilt'> ";
}
?>
