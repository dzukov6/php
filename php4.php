<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ülesanded</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2 class="mb-4">PHP Ülesanded</h2>
    
    <!-- Jagamine -->
    <h3>Jagamine</h3>
    <form method="post">
        <input type="number" name="num1" class="form-control mb-2" placeholder="Sisesta esimene arv" required>
        <input type="number" name="num2" class="form-control mb-2" placeholder="Sisesta teine arv" required>
        <button type="submit" name="jaga" class="btn btn-primary">Jaga</button>
    </form>
    <?php
    if (isset($_POST["jaga"]) && !empty($_POST["num1"]) && !empty($_POST["num2"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        if ($num2 == 0) {
            echo "<p class='text-danger'>Jagamine nulliga ei ole lubatud!</p>";
        } else {
            echo "<p>Tulemus: " . round($num1 / $num2, 2) . "</p>";
        }
    }
    ?>
    <h3>Vanuse võrdlus</h3>
    <form method="post">
        <input type="number" name="vanus1" class="form-control mb-2" placeholder="Esimese inimese vanus" required>
        <input type="number" name="vanus2" class="form-control mb-2" placeholder="Teise inimese vanus" required>
        <button type="submit" name="vanus" class="btn btn-primary">Võrdle</button>
    </form>
    <?php
    if (isset($_POST["vanus"]) && !empty($_POST["vanus1"]) && !empty($_POST["vanus2"])) {
        $v1 = $_POST["vanus1"];
        $v2 = $_POST["vanus2"];
        if ($v1 > $v2) {
            echo "<p>Esimene inimene on vanem.</p>";
        } elseif ($v1 < $v2) {
            echo "<p>Teine inimene on vanem.</p>";
        } else {
            echo "<p>Mõlemad on ühevanused.</p>";
        }
    }
    ?>
    <h3>Ristkülik või ruut</h3>
    <form method="post">
        <input type="number" name="side1" class="form-control mb-2" placeholder="Külg 1" required>
        <input type="number" name="side2" class="form-control mb-2" placeholder="Külg 2" required>
        <button type="submit" name="shape" class="btn btn-primary">Kontrolli</button>
    </form>
    <?php
    if (isset($_POST["shape"]) && !empty($_POST["side1"]) && !empty($_POST["side2"])) {
        $s1 = $_POST["side1"];
        $s2 = $_POST["side2"];
        if ($s1 == $s2) {
            echo "<p>See on ruut.</p>";
        } else {
            echo "<p>See on ristkülik.</p>";
        }
    }
    ?>
    <h3>Ristkülik või ruut II</h3>
    <?php
    if (isset($_POST["shape"])) {
        echo "<div style='width: {$s1}px; height: {$s2}px; background-color: lightblue; margin: 10px;'></div>";
    }
    ?>
    <h3>Juubel</h3>
    <form method="post">
        <input type="number" name="year" class="form-control mb-2" placeholder="Sisesta sünniaasta" required>
        <button type="submit" name="juubel" class="btn btn-primary">Kontrolli</button>
    </form>
    <?php
    if (isset($_POST["juubel"]) && !empty($_POST["year"])) {
        $year = $_POST["year"];
        $currentYear = date("Y");
        $age = $currentYear - $year;
        if ($age % 5 == 0) {
            echo "<p>Palju õnne, sul on juubel!</p>";
        } else {
            echo "<p>See ei ole juubeliaasta.</p>";
        }
    }
    ?>
    <h3>Hinne</h3>
    <form method="post">
        <input type="number" name="points" class="form-control mb-2" placeholder="Sisesta KT punktid" required>
        <button type="submit" name="hinne" class="btn btn-primary">Kontrolli</button>
    </form>
    <?php
    if (isset($_POST["hinne"]) && !empty($_POST["points"])) {
        $points = $_POST["points"];
        switch (true) {
            case ($points > 10):
                echo "<p class='text-success'>SUPER!</p>";
                break;
            case ($points >= 5 && $points <= 9):
                echo "<p class='text-warning'>TEHTUD!</p>";
                break;
            case ($points < 5 && $points >= 0):
                echo "<p class='text-danger'>KASIN!</p>";
                break;
            default:
                echo "<p class='text-danger'>SISESTA OMA PUNKTID!</p>";
        }
    }
    ?>
</body>
</html>

