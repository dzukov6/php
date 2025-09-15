<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 3</title>
</head>
<body>
    <h2>Trapetsi ja rombi arvutused</h2>
    <form method="post">
        <label>Trapetsi ülemine alus (a): </label>
        <input type="number" step="0.1" name="a" required><br><br>
        <label>Trapetsi alumine alus (b): </label>
        <input type="number" step="0.1" name="b" required><br><br>
        <label>Trapetsi kõrgus (h): </label>
        <input type="number" step="0.1" name="h" required><br><br>
        <label>Rombi külg (s): </label>
        <input type="number" step="0.1" name="s" required><br><br>
        
        <input type="submit" value="Arvuta">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);
        $h = floatval($_POST["h"]);
        $s = floatval($_POST["s"]);

        $trapetsi_pindala = round((($a + $b) * $h) / 2, 1);

        $rombi_umbermoot = round(4 * $s, 1);

        echo "<h3>Tulemused:</h3>";
        echo "<p>Trapetsi pindala on $trapetsi_pindala ruutühikut.</p>";
        echo "<p>Rombi ümbermõõt on $rombi_umbermoot ühikut.</p>";
    }
    ?>
</body>
</html>

