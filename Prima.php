<!DOCTYPE html>
<html>
<head>
    <title>Cek Bilangan Prima</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Masukkan Bilangan:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $Prima = true;

        if ($number <= 1) {
            $Prima = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $Prima = false;
                    break;
                }
            }
        }

        if ($Prima) {
            echo "<p>$number adalah bilangan prima.</p>";
        } else {
            echo "<p>$number bukan bilangan prima.</p>";
        }
    }
    ?>
</body>
</html>
