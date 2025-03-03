<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>PHP</h1>

        <h2>Tervitus</h2>
        <?php
        function tervitus() {
            echo "<p>Tere päiksekesekene!</p>";
        }
        tervitus();
        ?>

        <h2>Liitu uudiskirjaga</h2>
        <?php
        function uudiskiri() {
            echo '<form class="form-inline">
                    <label for="email">E-post:</label>
                    <input type="email" class="form-control" id="email" placeholder="Sisesta oma e-post" required>
                    <button type="submit" class="btn btn-primary">Liitu</button>
                  </form>';
        }
        uudiskiri();
        ?>

        <h2>Kasutajanimi ja email</h2>
        <?php
        function kasutajanimiEmail($kasutajanimi) {
            $kasutajanimi = strtolower($kasutajanimi);
            $email = $kasutajanimi . "@hkhk.edu.ee";
            echo "<p>Kasutajanimi: $kasutajanimi</p>";
            echo "<p>Email: $email</p>";
        }
        kasutajanimiEmail("MatiTamm");
        ?>

        <h2>7-kohaline kood</h2>
        <?php
        function generateKood() {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < 7; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
            echo "<p>Kood: $randomString</p>";
        }
        generateKood();
        ?>

        <h2>Arvud</h2>
        <?php
        function arvud($start, $end, $step = 1) {
            for ($i = $start; $i <= $end; $i += $step) {
                echo "$i ";
            }
        }
        arvud(2, 8);
        echo "<br>";
        arvud(2, 8, 3);
        ?>

        <h2>Ristküliku pindala</h2>
        <?php
        function ristkylikPindala($pikkus, $laius) {
            $pindala = $pikkus * $laius;
            echo "<p>Ristküliku pindala: $pindala</p>";
        }
        ristkylikPindala(5, 8);
        ?>

        <h2>Isikukood</h2>
        <?php
        function isikukood($kood) {
            if (strlen($kood) == 11) {
                $sugu = ($kood[0] % 2 == 0) ? 'Naine' : 'Mees';
                $sund = "Sünniaeg: " . substr($kood, 1, 2) . "." . substr($kood, 3, 2) . "." . "19" . substr($kood, 5, 2);
                echo "<p>Isikukood on õige pikkusega.</p>";
                echo "<p>Sugu: $sugu</p>";
                echo "<p>$sund</p>";
            } else {
                echo "<p>Isikukood ei ole õige pikkusega.</p>";
            }
        }
        isikukood("39410200315");
        ?>

        <h2>Head mõtted</h2>
        <?php
        function headMotted() {
            $alus = ["Tere", "Kuidas", "Miks"];
            $odelis = ["on", "võib", "tundub"];
            $sihitis = ["täna", "ilma", "meil"];

            $randomAlus = $alus[array_rand($alus)];
            $randomOdelis = $odelis[array_rand($odelis)];
            $randomSihitis = $sihitis[array_rand($sihitis)];

            echo "<p>$randomAlus $randomOdelis $randomSihitis.</p>";
        }
        headMotted();
        ?>
    </div>
</body>
</html>
