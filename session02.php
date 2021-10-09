<!DOCTYPE html>
<head>
    <title>Belajar php 7</title>
</head>
<body>
    <?php session_start();
    echo "Nama anda adalah" .$_SESSION['nama'];
    echo "<br/><a href='session01.php'>Kembali ke hal pertama</a>";
    ?>
</body>
</html>