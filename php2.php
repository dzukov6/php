<?php

$arv1 = 15;
$arv2 = 4;

echo "$arv1 + $arv2 = " . ($arv1 + $arv2) . "<br>";
echo "$arv1 - $arv2 = " . ($arv1 - $arv2) . "<br>";
echo "$arv1 * $arv2 = " . ($arv1 * $arv2) . "<br>";
echo "$arv1 / $arv2 = " . number_format($arv1 / $arv2, 2) . "<br>";
echo "$arv1 % $arv2 = " . ($arv1 % $arv2) . "<br><br>";

$millimeetrid = 1234;
$sentimeetrid = $millimeetrid / 10;
$meetrid = $millimeetrid / 1000;

echo "$millimeetrid mm on " . number_format($sentimeetrid, 2) . " cm.<br>";
echo "$millimeetrid mm on " . number_format($meetrid, 2) . " m.<br><br>";

$a = 3;
$b = 4;
$c = sqrt($a**2 + $b**2);
$umbermoot = round($a + $b + $c);
$pindala = round(($a * $b) / 2);

echo "Täisnurkse kolmnurga ümbermõõt on $umbermoot ühikut.<br>";
echo "Täisnurkse kolmnurga pindala on $pindala ruutühikut.<br>";
?>
