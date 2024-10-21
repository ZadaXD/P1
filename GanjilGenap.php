<!DOCTYPE html>
<html>
<head>
    <title>Cek Bilangan Ganjil atau Genap</title>
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

        if ($number % 2 == 0) {
            echo "<p>$number adalah bilangan Genap.</p>";
        } else {
            echo "<p>$number adalah bilangan Ganjil.</p>";
        }
    }
    ?>
</body>
</html>
