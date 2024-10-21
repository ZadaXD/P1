<!DOCTYPE html>
<html>
<head>
    <title>Cek Kelipatan Bilangan</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Masukkan Bilangan:</label>
        <input type="number" id="number" name="number" required>
        <label for="a">Masukkan Nilai a:</label>
        <input type="number" id="a" name="a" required>
        <label for="b">Masukkan Nilai b:</label>
        <input type="number" id="b" name="b" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($number % $a == 0 && $number % $b == 0) {
            echo "<p>$number adalah kelipatan $a dan $b.</p>";
        } elseif ($number % $a == 0) {
            echo "<p>$number adalah kelipatan $a.</p>";
        } elseif ($number % $b == 0) {
            echo "<p>$number adalah kelipatan $b.</p>";
        } else {
            echo "<p>$number bukan kelipatan $a maupun $b.</p>";
        }
    }
    ?>
</body>
</html>
