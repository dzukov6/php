<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP</h1>
    
    <h2>Arvud 1-100</h2>
    <?php
    echo "<p>";
    for ($i = 1; $i <= 100; $i++) {
        echo "$i. ";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
    echo "</p>";
    ?>

    <h2>Tarnidest horisontaalne rida</h2>
    <?php
    echo "<p>**********</p>";
    ?>

    <h2>Tarnidest vertikaalne rida</h2>
    <?php
    echo "<p>";
    for ($i = 0; $i < 10; $i++) {
        echo "*<br>";
    }
    echo "</p>";
    ?>


    <h2>Tarnidest ruut</h2>
    <form method="get">
        <label for="size">Sisesta ruudu suurus:</label>
        <input type="number" name="size" id="size" min="1" required>
        <input type="submit" value="Loo ruut">
    </form>
    <?php
    if (isset($_GET['size'])) {
        $size = (int)$_GET['size'];
        echo "<p>";
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
        echo "</p>";
    }
    ?>

    <h2>Kahanevad paarisarvud 10-1</h2>
    <?php
    echo "<p>";
    for ($i = 10; $i >= 1; $i--) {
        if ($i % 2 == 0) {
            echo "$i<br>";
        }
    }
    echo "</p>";
    ?>

    <h2>Kolmega jagunevad arvud 1-100</h2>
    <?php
    echo "<p>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            echo "$i ";
        }
    }
    echo "</p>";
    ?>

    <h2>Poiste ja tudrukute paarid</h2>
    <?php
    $poised = ["Jaan", "Mati", "Kaur", "Peeter"];
    $tydrukud = ["Liis", "Mari", "Anu", "Kati"];

    echo "<p>";
    for ($i = 0; $i < count($poised); $i++) {
        echo "Poiss: " . $poised[$i] . ", Tudruk: " . $tydrukud[$i] . "<br>";
    }
    echo "</p>";
    ?>

    <h2>Poiste ja tudrukute suvalised paarid</h2>
    <?php
    $poised_koopiad = $poised;
    $tydrukud_koopiad = $tydrukud;

    shuffle($poised);
    shuffle($tydrukud);

    echo "<p>";
    for ($i = 0; $i < count($poised); $i++) {
        echo "Poiss: " . $poised[$i] . ", Tudruk: " . $tydrukud[$i] . "<br>";
    }
    echo "</p>";
    ?>
</body>
</html>
