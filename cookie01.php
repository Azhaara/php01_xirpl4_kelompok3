<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php 8</title>
</head>
<body>
    <?php
    $value = 'Hamid';
    $value2 = 'Hamid Sabirn';

    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600); /*expire in 1 hour */

    echo "<h1>Ini halaman pengesetan cookie</h1>";
    echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
    ?>
</body>
</html>