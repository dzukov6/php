<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>harjutus 12</title>
    <meta name="author" content="Daniel Zukov">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>harjutus 12</h1>
    <form action="h12.php" method="get">
                <h3>soiduaeg</h3>
                lisa alguse aeg <input type="time" name="algus"><br>
                lisa lõpu aeg <input type="time" name="lopp"><br>
                <input type="submit" value="Arvuta">
            </form>
    <?php
    if (isset($_GET['algus']) && isset($_GET['lopp'])) {
        $algus_aeg = $_GET['algus'];
        $lopp_aeg = $_GET['lopp'];
        if (empty($algus_aeg) || empty($lopp_aeg)) {
            echo "Palun Taitke molemad lahtrid";
        } else {
            $start = DateTime::createFromFormat('H:i', $algus_aeg);
            $lopp = DateTime::createFromFormat('H:i', $lopp_aeg);
    
            if ($start && $lopp) {
                if ($lopp < $start) {
                    $lopp->add(new DateInterval('P1D'));
                }
                $erinevus = $start->diff($lopp);
                echo "soidu aeg on " . $erinevus->h . " tundi ja " . $erinevus->i . " minutit.";
            } else {
                echo "vale ajaformaat. palun sisestage aeg formaadis hh:mm.";
            }
        }
    } else {
        echo "sisesta algus ja lõpu aeg";
    }
    echo "<br>";
    $mehed = 0;
    $naised = 0;
    $mehed_palk = 0;
    $naised_palk = 0;
    $max_mehed_palk = 0;
    $max_naised_palk = 0;
    
    $failinimi = 'tootajad.csv';
    if (($csv = fopen($failinimi, "r")) !== FALSE) {
        while (($rida = fgetcsv($csv, filesize($failinimi), ";")) !== FALSE) {
            if (is_array($rida) && count($rida) >= 3) {
                $sugu = $rida[1];
                $palk = $rida[2];
    
                if ($sugu == 'm') {
                    $mehed++;
                    $mehed_palk += $palk;
                    if ($palk > $max_mehed_palk) {
                        $max_mehed_palk = $palk;
                    }
                } elseif ($sugu == 'n') {
                    $naised++;
                    $naised_palk += $palk;
                    if ($palk > $max_naised_palk) {
                        $max_naised_palk = $palk;
                    }
                }
            }
        }
        fclose($csv);
    }
    
    if ($mehed > 0) {
        echo "meeste keskmine palk: " . round($mehed_palk / $mehed, 2) . "<br>";
        echo "suurim meeste palk: " . round($max_mehed_palk, 2) . "<br>";
    }
    
    if ($naised > 0) {
        echo "naiste keskmine palk: " . round($naised_palk / $naised, 2) . "<br>";
        echo "suurim naiste palk: " . round($max_naised_palk, 2) . "<br>";
    }
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>